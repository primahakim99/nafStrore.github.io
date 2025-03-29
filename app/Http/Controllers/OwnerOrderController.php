<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Evidence_shipping;
use App\Models\Store;
use App\Models\product;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OwnerOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Store::join('order_items', 'order_items.store_id', '=', 'stores.id')
                        ->join('orders', 'order_items.order_id', '=', 'orders.id')
                        ->where('stores.user_id', auth()->user()->id)
                        ->get();
        dd($orders);
        return view('owner.order.index', [
            "title" => "Order Owner",
            'orders' => $orders,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order_id = $request->input('order_id');
        $image_evidence = $request->file('image')->store('image_evidence','public');
        Evidence_shipping::Create([
            'order_id' => $order_id,
            'img_evidence' => $image_evidence,
        ]);
        return redirect('/orderOwner')->with('message', 'Evidence Already send');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order, $id)
    {
        $orders = Store::join('order_items', 'order_items.store_id', '=', 'stores.id')
                        ->join('products', 'products.id', '=', 'order_items.product_id')
                        ->where('stores.user_id', auth()->user()->id)
                        ->where('order_items.order_id', $id)
                        ->get();
        $pesan = Order::all()->where('id', $id);
        // dd($orders);
        return view('owner.order.show', [
            "title" => "View Order Owner",
            'orders' => $orders,
            'pesan' => $pesan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
