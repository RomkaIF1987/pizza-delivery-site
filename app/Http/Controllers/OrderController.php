<?php

namespace App\Http\Controllers;

use App\Classes\OrderItems;
use App\Classes\Order;
use App\Http\Requests\OrderTableRequest;
use App\Mail\OrderConfirmation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;
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
     * @param OrderTableRequest $request
     * @return void
     */
    public function store(OrderTableRequest $request)
    {

        $params = $request->validated();
        $orderItemsParams['itemOrders'] = $params['itemOrders'];
        unset($params['itemOrders']);

        $order = Order::create($params);

        $orderItemsParams = json_decode($orderItemsParams['itemOrders'], true);

        foreach ($orderItemsParams as $orderItemsParam) {

            $orderItemsParam['order_id'] = $order->id;
            OrderItems::create($orderItemsParam);
        }
        Session::forget('cart');

        Mail::to(Auth::user()->email)->send(
            new OrderConfirmation($order));

        return redirect()->route('cartConfirm', ['order_id' => $order->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('manager.show', [
            'orders' => Order::find($id),
            'i' => 1
        ]);
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
        $order->delete();
        $order->orderItems()->whereIn('order_id', $order)->delete();
        return back();
    }

    public function orderCompleted(Order $order)
    {
        $order->complete();
        return back();
    }

    public function orderIncompleted(Order $order)
    {
        $order->incomplete();
        return back();
    }
}
