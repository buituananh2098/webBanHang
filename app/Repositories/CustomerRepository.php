<?php

namespace App\Repositories;

use App\Models\Customer;
use App\Models\CustomerAddress;
use Illuminate\Support\Facades\Hash;

class CustomerRepository
{
    public function getDataIndex()
    {
        return Customer::whereNull('deleted_at')->get();
    }
    public function getDataByName($param)
    {
        return Customer::whereNull('deleted_at')->where('name', 'LIKE', '%' . $param . '%')->get();
    }

    public function getDataById($id)
    {
        return Customer::whereNull('deleted_at')->find($id);
    }

    public function checkLogin($email, $password)
    {
        $customer = Customer::where('email', $email)->first();
        if ($customer) {
            if (Hash::check($password, $customer->password)) {
                return $customer;
            }
        }
        return false;
    }

    public function updateOrCreate($data, $id = null) {
        $data['password'] = Hash::make($data['password']);
        $data = Customer::updateOrCreate(['id'=>$id,],$data);
        if($data->id){
            return true;
        }
        return false;
    }

    public function getDataEdit($id)
    {
        return Customer::find($id);
    }

    //Delete address customer
    public function  destroyAddressCustomer($customerID){
        $delete = CustomerAddress::where('customer_id', $customerID);
        if(!empty($delete)){
            $delete->delete();
        }
        else{
            return false;
        }
        return true;
    }

    //Func delete customer
    public function destroy($id)
    {
        $delete = Customer::find($id);
        $delete->delete();
        $this->destroyAddressCustomer($id);
        if($delete->trashed())
        {
            return true;
        }
        return false;
    }
}
