<?php

namespace App\Repositories;

use App\Models\Discount;
class DiscountRepository
{
    public function getDataIndex()
    {
        return Discount::whereNull('deleted_at')->get();
    }
    public function getDataByName($param)
    {
        return Discount::whereNull('deleted_at')->where('name', 'LIKE', '%' . $param . '%')->get();
    }
    public function getDataById($id)
    {
        return Discount::whereNull('deleted_at')->find($id);
    }

    public function updateOrCreate($data, $id = null) {
        $data = Discount::updateOrCreate(['id'=>$id,],$data);
        if($data->id){
            return true;
        }
        return false;
    }
    public function getDataEdit($id)
    {
        return Discount::find($id);
    }

    public function destroy($id)
    {
        $delete = Discount::find($id);
        $delete->delete();
        if ($delete->trashed()) {
            return true;
        }
        return false;
    }
}
