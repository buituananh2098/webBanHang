<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateOrder;
use App\Repositories\OrderRepository;
use App\Repositories\QuoteRepository;
use App\Repositories\PaymentRepository;
use Illuminate\Http\Request;
use Mockery\Exception;

class OrderController extends Controller
{
    protected $orderRepository;
    protected $quoteRepository;
    protected $paymentRepository;

    function __construct(
        OrderRepository $orderRepository,
        QuoteRepository $quoteRepository,
        PaymentRepository $paymentRepository
    ) {
        $this->orderRepository = $orderRepository;
        $this->quoteRepository = $quoteRepository;
    }

    public function index()
    {
        $orders = $this->orderRepository->getDataIndex();
        return view('backend.order.index', ['orders' => $orders]);
    }

    public function create()
    {
        $parent = new OrderRepository();
        return view('backend.order.create', [
            'parents' => $parent->getDataIndex()
        ]);
    }

    public function saveData($request, $id = null)
    {
        $orders = [
            'status' => $request->status,
            'money_deposit' => $request->money_deposit,
            'status_ship' => $request->status_ship,
            'status_payment' => $request->status_payment,
            'customer_address' => $request->customer_address,
            'customer_name' => $request->customer_name,
            'customer_phone_number' => $request->customer_phone_number,
            'customer_email' => $request->customer_email,
            'total_price' => $request->total_price,
        ];
        return $this->orderRepository->updateOrCreate($orders, $id);
    }

    public function store(ValidateOrder $request)
    {
        if ($this->saveData($request)) {
            return redirect()->route('admin.order.index')->with(['message' => 'Thêm mới thành công', 'type' => 'success']);
        } else {
            return redirect()->route('admin.order.index')->with(['message' => 'Thêm mới thất bại', 'type' => 'error']);
        }
    }
    public function setOrder(Request $request, $order_id = null)
    {
        $quotes = $this->quoteRepository->getQuotes(['ip_location' => $request->ip()]);
        try {
            $quote_id = $request->quote_id;
            $data = [
                "address" => $request->address,
                "payment_method" => 1,
                "city" => $request->city,
                "customer_name" => $request->customer_name,
                "customer_phone_number" => $request->customer_phone_number,
                "customer_email" => $request->customer_email,
                "customer_address" => $request->customer_address,
                "description" => $request->description,
            ];
            $quoteItem = $this->quoteRepository->getQuoteItemByQuoteId($quote_id);
            if ($request)
            $url = $this->create_payment($quotes,$request);
            $this->orderRepository->updateOrderByQuote($data, $quoteItem, $quote_id, $order_id);
            return redirect($url);
            //  return redirect()->route('att.index');
        } catch (Exception $e) {
            return redirect()->back();
        }
    }


    public function create_payment($quotes,$request)
    {
        $paymentData  = $this->paymentRepository->getDataIndex();
        $vnp_TmnCode = $paymentData[0]-> vnp_TmnCode ; //Mã website tại VNPAY
        $vnp_HashSecret =$paymentData[0]-> vnp_HashSecret; //Chuỗi bí mật
        $vnp_Url = $paymentData[0]-> vnp_Url;
        $vnp_Returnurl = $paymentData[0]-> return_Url;
        $vnp_TxnRef = time(). $quotes->id ; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "$request->noi_dung_tt";
        $vnp_OrderType = 230001;
        $vnp_Amount = $quotes->total * 100;
        $vnp_Locale = "vn";
        $vnp_BankCode = "$request->bank_code";
        $vnp_IpAddr = request()->ip();
        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
//        $returnData = array(
//            'code' => '00'
//        ,
//            'message' => 'success'
//        ,
//            'data' => $vnp_Url
//        );
        return $vnp_Url;
    }

    public function return_vnp(Request $request)
    {
        $paymentData  = $this->paymentRepository->getDataIndex();
        $vnp_HashSecret = $paymentData[0]-> vnp_HashSecret;
        if(empty($request)){
            return redirect()->route('att.index');
        }
        $vnp_SecureHash = $_GET['vnp_SecureHash'];
        $inputData = array();
        foreach ($_GET as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }
        unset($inputData['vnp_SecureHashType']);
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . $key . "=" . $value;
            } else {
                $hashData = $hashData . $key . "=" . $value;
                $i = 1;
            }
        }
        //$secureHash = md5($vnp_HashSecret . $hashData);
        $secureHash = hash('sha256', $vnp_HashSecret . $hashData);
        if ($secureHash == $vnp_SecureHash) {
            $style = "color: #31c971";
            $stringKq = "Thanh toán thành công ! Chúng tôi đang xử lý đơn hàng của bạn.";
            return view('frontend.pages.ketquathanhtoan',['style' => $style, 'stringKq' => $stringKq]);
        } else {
            $style = "color: #31c971";
            $stringKq = "Thanh toán không thành công ! Vui lòng kiểm tra lại.";
            return view('frontend.pages.ketquathanhtoan',['style' => $style, 'stringKq' => $stringKq]);
        }
//        $url = session('url_prev','/');
//        if($request->vnp_ResponseCode == "00") {
//            $this->apSer->thanhtoanonline(session('cost_id'));
//            return redirect($url)->with('success' ,'Đã thanh toán phí dịch vụ');
//        }
//        session()->forget('url_prev');
//        return redirect($url)->with('errors' ,'Lỗi trong quá trình thanh toán phí dịch vụ');
    }

}
