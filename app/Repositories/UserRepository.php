<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function getDataIndex()
    {
       return User::whereNull('deleted_at')->get();
    }

    public function getDataCreate()
    {
       
    }

    public function updateOrCreate($data, $id = null) {
        $data = User::updateOrCreate(['id'=>$id,],$data);
        if($data->id){
            return true;
        }
        return false;
    }

    public function getDataEdit($id)
    {
        return User::find($id);
    }

    public function destroy($id)
    {
        $delete = User::find($id);
        $delete->delete();
        if($delete->trashed())
        {
            return true;
        }
        return false;
    }
}