<?php
namespace App\Http\Controllers;

use App\Http\Requests\ValidatePayment;
use App\Repositories\PaymentRepository;

class PaymentController extends Controller
{
    protected $repository;
    function __construct(PaymentRepository $paymentRepository)
    {
        return $this->repository = $paymentRepository;
    }

    function index(){
        $payment = $this->repository->getDataIndex();
        return view('backend.payment.index',['payment'=>$payment]);
    }
    function edit($id){

        $payment = $this->repository->getDataEdit($id);
       // dd($payment->vnp_TmnCode);
        return view('backend.payment.edit',['payment'=>$payment]);
    }

    public function saveData($request, $id = null)
    {
        dd($request);
            $payment = [
                'vnp_TmnCode' => $request->vnp_TmnCode,
                'vnp_HashSecret' => $request->vnp_HashSecret,
                'vnp_Url' => $request->vnp_Url
            ];
        if ($request->vnp_TmnCode == null || $request->vnp_HashSecret == null || $request->vnp_Url == null) {
            return;
        }
        return $this->repository->updateOrCreateOrderItem($payment, $id);
    }

    public function update(ValidatePayment $request, $id)
    {
        dd($request);
        if ($this->saveData($request, $id)) {
            return redirect()->route('admin.payment.index')->with([
                'message' => 'Cập nhật thành công',
                'type' => 'success'
            ]);
        } else {
            return redirect()->route('admin.payment.index')->with(['message' => 'Cập nhật thất bại', 'type' => 'error']);
        }
    }

}
