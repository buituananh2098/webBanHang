<?php

namespace App\Repositories;

use App\Models\Role;

class RoleRepository
{
    public function getDataIndex()
    {
       return Role::whereNull('deleted_at')->get();
    }

    public function getDataCreate()
    {
       
    }

    public function updateOrCreate($data, $id = null) {
        $data = Role::updateOrCreate(['id'=>$id,],$data);
        if($data->id){
            return true;
        }
        return false;
    }

    public function getDataEdit($id)
    {
        return Role::find($id);
    }

    public function destroy($id)
    {
        $delete = Role::find($id);
        $delete->delete();
        if($delete->trashed())
        {
            return true;
        }
        return false;
    }
}