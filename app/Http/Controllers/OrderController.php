<?php

namespace App\Http\Controllers;

use App\Classes\OrderItems;
use App\Classes\Order;
use Illuminate\Http\Request;

use Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request $request
     * @param $totalPrice
     * @return void
     */
    public function store(Request $request)
    {

        $orderParams = $request->validate([
            'user_id' => 'required',
            'user_name' => 'required',
            'user_phone' => 'required',
            'user_address' => 'required',
            'sum' => 'required'
        ]);

        $order = Order::create($orderParams);

        $orderItemsParams = $request->validate([
            'itemOrders' => 'required']);

        $orderItemsParams = json_decode($orderItemsParams['itemOrders'], true);

        foreach ($orderItemsParams as $orderItemsParam) {

            $orderItemsParam['order_id'] = $order->id;
            OrderItems::create($orderItemsParam);
        }
        Session::forget('cart');

        return redirect()->route('cartConfirm', ['order_id' => $order->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
