<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\OrderItem;
use Mockery\Exception;

class OrderRepository
{
    public function getDataIndex()
    {
        return Order::whereNull('deleted_at')->get();
    }

    public function updateOrCreateOrderItem($data, $id = null)
    {
        return OrderItem::updateOrCreate(['id' => $id], $data);
    }

    public function updateOrCreate($data, $id = null)
    {
        try {
            $data = Order::updateOrCreate(['id' => $id,], $data);
            return true;
        }catch (\Exception $e){
            return false;
        }
    }

    public function convertQuoteToOrderItem($quoteItem, $order_id)
    {
        try {
            foreach ($quoteItem as $item) {
                $data['order_id']      = $order_id;
                $data['product_id']    = $item->product_id;
                $data['product_name']  = $item->product_name;
                $data['product_code']  = $item->product_code;
                $data['reward_points'] = $item->reward_points;
                $data['description']   = $item->description;
                $data['price']         = $item->price;
                $data['amount']        = $item->amount;
                $data['tax']           = $item->tax;
                $data['discount']      = $item->discount;
                $this->updateOrCreateOrderItem($data);
                DB::table('quote_item')->where('id', $item->id)->delete();
            }
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function updateOrderByQuote($data_quote, $quoteItem, $quote_id, $orderId = null) {
        $order = Order::updateOrCreate(['id' => $orderId,], $data_quote);
        if ($order) {
            $this->convertQuoteToOrderItem($quoteItem, $order->id);
            DB::table('quotes')->where('id', $quote_id)->delete();
            return $order->id;
        }
        return false;
    }

    public function destroy($id)
    {
        $delete = Order::find($id);
        if (!empty($delete)) {
            $delete->delete();
        }else{
            return false;
        }
        return true;
    }
}
