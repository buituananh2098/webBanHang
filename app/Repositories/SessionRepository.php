<?php

namespace App\Repositories;

use App\Models\Session;

class SessionRepository
{
    public function getDataIndex()
    {
        if (count(Session::whereNull('deleted_at')->get())) {
            return Session::whereNull('deleted_at')->get();
        }
        return null;
    }

    public function updateOrCreate($data, $id = null) {
        $data = Session::updateOrCreate(['id' =>$id,],$data);
        if($data->id){
            return true;
        }
        return false;
    }

    public function getDataEdit($id)
    {
        return Session::find($id);
    }

    public function destroy($id)
    {
        $delete = Session::find($id);
        $delete->delete();
        if($delete->trashed())
        {
            return true;
        }
        return false;
    }
}
