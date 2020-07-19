<?php

namespace App\Repositories;

use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class PaymentRepository
{
    public function getDataIndex()
    {
        return Payment::whereNull('deleted_at')->get();
    }

    public function updateOrCreateOrderItem($data, $id = null)
    {
        dd($data);
        return Payment::updateOrCreate(['id' => $id], $data);
    }

    public  function getDataEdit($id)
    {
        return Payment::find($id);
    }
}
