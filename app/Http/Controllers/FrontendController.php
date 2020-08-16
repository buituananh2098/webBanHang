<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use App\Repositories\CustomerRepository;
use App\Repositories\ProductRepository;
use App\Repositories\QuoteRepository;
use App\Repositories\BannerRepository;
use App\Repositories\SessionRepository;
use Composer\Autoload\includeFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\View\View;


class FrontendController extends Controller
{
    private $categoryRepository;
    private $productRepository;
    private $quoteRepository;
    private $customerRepository;
    private $bannerRepository;

    protected $session;
    protected $customer;
    protected $data = [];

    public function __construct(
        CategoryRepository $categoryRepository,
        ProductRepository $productRepository,
        QuoteRepository $quoteRepository,
        CustomerRepository $customer,
        BannerRepository $bannerRepository,
        SessionRepository $session
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
        $this->quoteRepository = $quoteRepository;
        $this->customerRepository = $customer;
        $this->session = $session;
        $this->bannerRepository = $bannerRepository;
        $this->data = [
            'session' => $this->session,
        ];
    }

    public function test(Request $request)
    {
        dd($this->bannerRepository->getBanner(2));
        return redirect()->route('att.index')->cookie('ck', 'tuanpa', 1);
        dd(Cookie::get('customer'));
        return redirect()->back()->with(['type' => 'error', 'message' => 'Đăng nhập thành công']);
        $c = Cookie::get('customer');
        dd($c);
        $current = '';
        while (strlen($price) >= 4) {
            $current = '.' . substr($price, -3) . $current;
            $price = substr($price, 0, -3);
        }
        return $price . $current;
    }

    public function index(Request $request)
    {
        $this->getCustomer();
        $this->data['headerCate'] = $this->categoryRepository->getParent(10);
        $this->data['collectionNameHighlight'] = $this->categoryRepository->getCollectionNameHighlight();
        $this->data['collectionNameNew'] = $this->categoryRepository->getCollectionNameNew();
        $this->data['blockNewProducts'] = $this->productRepository->getBlockNewProduct();
        $this->data['categoryHighLight'] = $this->categoryRepository->getHighLight();
        $this->data['banner'] = $this->bannerRepository->getBanner();
        $this->checkQuotes($request);
        return response()->view('frontend.pages.trangchu', $this->data);
    }

    public function index2(Request $request)
    {
        $this->data['categoryHighLight'] = $this->categoryRepository->getHighLight();
        $this->data['banners'] = $this->bannerRepository->getBanner();
        return view('frontend.new-demo.index2', $this->data);
    }

    public function login()
    {
        return view('frontend.pages.user.login');
    }

    public function loginPost(Request $request)
    {
        $customerPassword = $request->password;
        $customerAccount = $request->user_login;
        $customer = $this->customerRepository->checkLogin($customerAccount, $customerPassword);
        if ($customer) {
            return redirect()->route('att.index')->cookie('customer', $customer, 7200)->with([
                'type' => 'success',
                'message' => 'Đăng nhập thành công.'
            ]);
        }
        return redirect()->back()->with([
            'type' => 'error',
            'message' => 'Thông tin đăng nhập không chính xác. Vui lòng thử lại.'
        ]);
    }

    public function logout()
    {
        return redirect()->route('att.index')->cookie('customer', '')->with([
            'type' => 'success',
            'message' => 'Đăng xuất thành công.'
        ]);
    }

    public function register()
    {
        return view('frontend.pages.user.register');
    }

    public function saveData($request, $id = null)
    {
        $data = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => $request->password1,
            'birth_date' => $request->birthday,
        ];
        return $this->customerRepository->updateOrCreate($data);
    }

    public function registerPost(Request $request)
    {
        if ($this->saveData($request)) {
            return redirect()->route('att.index')->with($this->message);
        } else {
            return redirect()->route('att.register')->with([
                'message' => 'Đăng ký tài khoản thất bại.',
                'type' => 'error'
            ]);
        }
    }

    public function basket(Request $request)
    {
        $this->checkQuotes($request);
        return view('frontend.pages.basket', $this->data);
    }

    public function checkQuotes($request)
    {
        $quotes = $this->quoteRepository->getQuotes(['ip_location' => $request->ip()]);
        if ($quotes) {
            $quote_items = $this->quoteRepository->getQuoteItemByQuoteId($quotes->id);
            if (count($quote_items)) {
                $quoteInfo = [
                    'quotes' => $quotes,
                    'items' => $quote_items
                ];
                $this->data['quotes'] = $quoteInfo;
                return true;
            }
        } else {
            return false;
        }
    }

    private function setDataPayment($request)
    {
        $data = $this->quoteRepository->getQuotes(['ip_location' => $request->ip()]);
        if (empty($data)) {
            $partnerCode = "MOMOBIE420200428";
            $accessKey = "xOOYkFVIuMACsn7J";
            $serectkey = time() . $data->id;
            $orderId = "";
//            $localMessage = $_POST["localMessage"];
            $message = "";
//            $transId = $_POST["transId"];
//            $orderInfo = $_POST["orderInfo"];
            $amount = $data->total;
//            $errorCode = $_POST["errorCode"];
            //           $responseTime = $_POST["responseTime"];
            $requestId = $_POST["requestId"];
            $extraData = "";
            $payType = "web";
            $orderType = "momo_wallet";
            $m2signature = $_POST["signature"];
        }
    }

    public function checkout(Request $request)
    {
        if ($this->checkQuotes($request)) {
            return view('frontend.pages.checkout', $this->data);
        } else {
            return view('frontend.pages.basket', $this->data);
        }
    }

    public function getCustomer()
    {
        $customer = Cookie::get('customer');
        if (!empty($customer)) {
            $customer = json_decode($customer);
            if ($this->customerRepository->getDataById($customer->id)) {
                $this->data['customer'] = $customer;
                return $customer;
            }
        }
        return false;
    }

    public function getNewProducts()
    {
        $newProducts = $this->productRepository->getDataPaging();
        $this->data['headerCate'] = $this->categoryRepository->getParent();
        foreach ($newProducts as $product) {
            $product->cost = current_price($product->cost);
        }
        $this->data['Products'] = $newProducts;

        return view('frontend.pages.sanphammoi', $this->data);

    }

    public function getHotProducts()
    {
        $hotProducts = $this->productRepository->getDataPaging();
        $this->data['headerCate'] = $this->categoryRepository->getParent();
        foreach ($hotProducts as $product) {
//            $product['reward_points'] = current_price($product['cost']* $product['reward_points']/100);
            $product->cost = current_price($product->cost);
        }
        $this->data['Products'] = $hotProducts;

        return view('frontend.pages.sanphammoi', $this->data);

    }

//    public function create_payment($request)
//    {
////        dd($request->id);
//        $vnp_TmnCode = "APCKBSVD"; //Mã website tại VNPAY
//        $vnp_HashSecret = "NXBUYHINIGYTCRUDISEPCTMFQGSSQWUG"; //Chuỗi bí mật
//        $vnp_Url = "htdtp://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
//        $vnp_Returnurl = "http://localhost/return-vnpay";
//
//        $vnp_TxnRef = $request->id; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
//        $vnp_OrderInfo = $request->shipment;
//        $vnp_OrderType = 230001;
//        $vnp_Amount = $request->total * 100;
//        $vnp_Locale = "vn";
//        $vnp_BankCode = "VCB";
//        $vnp_IpAddr = request()->ip();
//        $inputData = array(
//            "vnp_Version" => "2.0.0",
//            "vnp_TmnCode" => $vnp_TmnCode,
//            "vnp_Amount" => $vnp_Amount,
//            "vnp_Command" => "pay",
//            "vnp_CreateDate" => date('YmdHis'),
//            "vnp_CurrCode" => "VND",
//            "vnp_IpAddr" => $vnp_IpAddr,
//            "vnp_Locale" => $vnp_Locale,
//            "vnp_OrderInfo" => $vnp_OrderInfo,
//            "vnp_OrderType" => $vnp_OrderType,
//            "vnp_ReturnUrl" => $vnp_Returnurl,
//            "vnp_TxnRef" => $vnp_TxnRef,
//        );
//
//        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
//            $inputData['vnp_BankCode'] = $vnp_BankCode;
//        }
//        ksort($inputData);
//        $query = "";
//        $i = 0;
//        $hashdata = "";
//        foreach ($inputData as $key => $value) {
//            if ($i == 1) {
//                $hashdata .= '&' . $key . "=" . $value;
//            } else {
//                $hashdata .= $key . "=" . $value;
//                $i = 1;
//            }
//            $query .= urlencode($key) . "=" . urlencode($value) . '&';
//        }
//
//        $vnp_Url = $vnp_Url . "?" . $query;
//        if (isset($vnp_HashSecret)) {
//            // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
//            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
//            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
//        }
//        $returnData = array(
//            'code' => '00'
//        ,
//            'message' => 'success'
//        ,
//            'data' => $vnp_Url
//        );
//        return redirect($vnp_Url);
//    }
//
//    public function return_vnp(Request $request)
//    {
//        $url = session('url_prev','/');
//        if($request->vnp_ResponseCode == "00") {
//            $this->apSer->thanhtoanonline(session('cost_id'));
//            return redirect($url)->with('success' ,'Đã thanh toán phí dịch vụ');
//        }
//        session()->forget('url_prev');
//        return redirect($url)->with('errors' ,'Lỗi trong quá trình thanh toán phí dịch vụ');
//    }
//    public function vnpay_ipn($request)
//    {
//        $vnp_TmnCode = "APCKBSVD"; //Mã website tại VNPAY
//        $vnp_HashSecret = "NXBUYHINIGYTCRUDISEPCTMFQGSSQWUG"; //Chuỗi bí mật
//        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
//        $vnp_Returnurl = "http://localhost/vnpay_php/vnpay_return.php";
//        $inputData = array();
//        $returnData = array();
//        $data = $request;
//        foreach ($data as $key => $value) {
//            if (substr($key, 0, 4) == "vnp_") {
//                $inputData[$key] = $value;
//            }
//        }
//
//        $vnp_SecureHash = $inputData['vnp_SecureHash'];
//        unset($inputData['vnp_SecureHashType']);
//        unset($inputData['vnp_SecureHash']);
//        ksort($inputData);
//        $i = 0;
//        $hashData = "";
//        foreach ($inputData as $key => $value) {
//            if ($i == 1) {
//                $hashData = $hashData . '&' . $key . "=" . $value;
//            } else {
//                $hashData = $hashData . $key . "=" . $value;
//                $i = 1;
//            }
//        }
//        $vnpTranId = $inputData['vnp_TransactionNo']; //Mã giao dịch tại VNPAY
//        $vnp_BankCode = $inputData['vnp_BankCode']; //Ngân hàng thanh toán
////$secureHash = md5($vnp_HashSecret . $hashData);
//        $secureHash = hash('sha256', $vnp_HashSecret . $hashData);
//        $Status = 0;
//        $orderId = $inputData['vnp_TxnRef'];
//
//        try {
//            //Check Orderid
//            //Kiểm tra checksum của dữ liệu
//            if ($secureHash == $vnp_SecureHash) {
//                //Lấy thông tin đơn hàng lưu trong Database và kiểm tra trạng thái của đơn hàng, mã đơn hàng là: $orderId
//                //Việc kiểm tra trạng thái của đơn hàng giúp hệ thống không xử lý trùng lặp, xử lý nhiều lần một giao dịch
//                //Giả sử: $order = mysqli_fetch_assoc($result);
//                $order = null;
//                if ($order != null) {
//                    if ($order["Status"] != null && $order["Status"] == 0) {
//                        if ($inputData['vnp_ResponseCode'] == '00') {
//                            $Status = 1;
//                        } else {
//                            $Status = 2;
//                        }
//                        //Cài đặt Code cập nhật kết quả thanh toán, tình trạng đơn hàng vào DB
//                        //
//                        //
//                        //
//                        //Trả kết quả về cho VNPAY: Website TMĐT ghi nhận yêu cầu thành công
//                        $returnData['RspCode'] = '00';
//                        $returnData['Message'] = 'Confirm Success';
//                    } else {
//                        $returnData['RspCode'] = '02';
//                        $returnData['Message'] = 'Order already confirmed';
//                    }
//                } else {
//                    $returnData['RspCode'] = '01';
//                    $returnData['Message'] = 'Order not found';
//                }
//            } else {
//                $returnData['RspCode'] = '97';
//                $returnData['Message'] = 'Chu ky khong hop le';
//            }
//        } catch (Exception $e) {
//            $returnData['RspCode'] = '99';
//            $returnData['Message'] = 'Unknow error';
//        }
//        //Trả lại VNPAY theo định dạng JSON
//        echo json_encode($returnData);
//    }
}
