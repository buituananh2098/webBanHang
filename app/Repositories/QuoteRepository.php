<?php

namespace App\Repositories;

use App\Models\Quote;
use App\Models\QuoteItem;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

use App\Repositories\ProductRepository;

class QuoteRepository
{
    public function getQuotes($params = [])
    {
        if (!empty($params)) {
            $quote_item = Quote::whereNull('deleted_at')
                ->where($params)->first();
            return $quote_item;
        }
        return false;
    }

    public function getQuoteItem($params = [])
    {
        if (!empty($params)) {
            $quote_item = QuoteItem::whereNull('deleted_at')
                ->where($params)->first();
            return $quote_item;
        }
        return false;
    }

    public function updateOrCreate($data_quote, $data_item, $id = null)
    {
        $quote = Quote::updateOrCreate(['ip_location' =>$id,], $data_quote);
        if($quote->id){
            $quote_item = $this->getQuoteItem([
                'quote_id'   => $quote->id,
                'product_id' => $data_item['product_id']
            ]);
            if ($quote_item) {
                $data_item['amount'] = $quote_item->amount + $data_item['amount'];
            }
            $product = Product::find($data_item['product_id']);
            if (!empty($product)) {
                $data_item += [
                    'product_name'  => $product->name,
                    'product_code'  => $product->code,
                    'reward_points' => $product->reward_points,
                    'description'   => $product->description,
                    'price'         => $product->cost
                ];
            }
            $data_item['quote_id'] = $quote->id;
            QuoteItem::updateOrCreate([
                'quote_id'   => $quote->id,
                'product_id' => $data_item['product_id'],
                ], $data_item);
            return $this->updateQuotes($quote->id);
        }
        return false;
    }

    public function updateQuotes($quote_id)
    {
        $quotes = $this->getQuoteItemByQuoteId($quote_id);
        $price_total = 0;
        $amount      = 0;
        foreach ($quotes as $item) {
            $price_total += $item->price * $item->amount;
            $amount      += $item->amount;
        }
        $data = [
            'total'        => $price_total,
            'quote_number' => $amount
        ];
        return Quote::updateOrCreate(['id' => $quote_id], $data);
    }

    public function getDataEdit($id)
    {
        return Quote::find($id);
    }

    public function destroy($id)
    {
        $delete = Quote::find($id);
        if (!empty($delete)) {
            $delete->delete();
        }else{
            return false;
        }
        return true;
    }

    public function getQuoteItemByQuoteId($quote_id)
    {
        return QuoteItem::whereNull('deleted_at')->where('quote_id', $quote_id)->get();
    }

    public function removeItem($quote_id, $item_id)
    {
        $delete = DB::table('quote_item')->where('id', $item_id);
        if ($delete) {
            $delete->delete();
            $this->updateQuotes($quote_id);
            return true;
        }
        return false;
    }
}
