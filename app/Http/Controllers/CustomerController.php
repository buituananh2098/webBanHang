<?php

namespace App\Http\Controllers;

use App\Models\CustomerAddress;
use App\Repositories\CustomerRepository;
use App\Models\CustomerAddress as CustomerAddrress;

class CustomerController extends Controller{
    protected $repository;
    function __construct(CustomerRepository $customer)
    {
        return $this->repository = $customer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = $this->repository->getDataIndex();
        $addressReposi = [];
        foreach ($customers as $key => $customer) {
            if ($customer->address_id) {
                $addr = CustomerAddress::find($customer->address_id);
                $address = '';
                if(!empty($addr)){
                    $address = $addr->delivery_address.", ";
                    if($addr->delivery_district){
                        $address.$addr->delivery_district.", ";
                    }
                    $address.$addr->delivery_province.", ".$addr->delivery_nation;
                }
                $addressReposi[$customer->id] = $address;
            }
        }

        return view('backend.customer.index', [
            'customers' => $customers,
            'address'   => $addressReposi
        ]);
    }

    public function register(){
        return view('frontend.pages.user.register');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repository->destroy($id);
        return redirect()->route('admin.customer.index')->with(['message' => 'Xóa khách hàng thành công', 'type' => 'success']);
    }
}
