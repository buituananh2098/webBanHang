<?php

namespace App\Http\Controllers;

use App\Repositories\QuoteRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class QuoteController extends Controller
{
    protected $repository;

    function __construct(QuoteRepository $quoteRepository)
    {
        return $this->repository = $quoteRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getBasket()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($request)
    {
        $id = $request->id;
        $id = (int) str_replace('button_cart_', '', $id);
        $data_quote = [
            'ip_location' => $request->ip()
        ];
        $customer = Cookie::get('customer');
        if ($customer) {
            $customer = json_decode($customer);
            $data_quote['customer_id'] = $customer->id;
        }
        $data_item = [
            'product_id'  => $id,
            'amount'      => $request->imt,
        ];
        return $this->repository->updateOrCreate($data_quote, $data_item, $request->ip());
    }

    public function addToCart(Request $request)
    {
        try {
            $quotes = $this->create($request);
            $quote_items = $this->repository->getQuoteItemByQuoteId($quotes->id);
            $quoteInfo = [
                'quotes' => $quotes,
                'items'  => $quote_items
            ];
            return view('frontend.blocks.mini-cart', [
                'quotes'      => $quoteInfo
            ]);
        } catch (\Exception $e) {
            return 'Server Error!';
        }
    }

    public function store(Request $request, $id = null)
    {
        $data = [
            'product_id' => $request->product_id,
            'amount' => $request->qty,
        ];
        $this->repository->updateOrCreate($data, $id);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {

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
        return redirect()->route('fahasa.cart')->with(['message' => 'Xóa thành công', 'type' => 'success']);
    }

    public function removeItem($quote_id, $item_id)
    {
        $this->repository->removeItem($quote_id, $item_id);
        return redirect()->back();
    }
}
