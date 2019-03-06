<?php

namespace App\Http\Controllers;

use App\Classes\Order;
use App\Classes\OrderItems;
use App\Models\Blog;
use App\Models\MenuItem;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Session;

class CartController extends Controller
{
    public function getAddToCart(Request $request, $id)
    {
        $menuItem = MenuItem::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($menuItem, $menuItem->id);

        $request->session()->put('cart', $cart);
        return back();
    }

    public function getReduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        Session::put('cart', $cart);
        return redirect()->route('cartShow');
    }

    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('cartShow');
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('cart.show', ['products' => []]);
        }
        $user = Auth::user();
        $menuItem = MenuItem::all();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart.show', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice,
            'user' => $user, 'MenuItem' => $menuItem, 'i' => 1, 'itemOrders' => $cart->itemOrders(),'blogs' => Blog::all()]);
    }

    public function getCartConfirm($order_id)
    {
        $orders = Order::find($order_id);
        $orderItems = OrderItems::find($order_id);
        $menuItems = MenuItem::find($orderItems->MenuItem_id);

        return view('cart.confirm', ['orders' => $orders, 'i' => 1, 'blogs' => Blog::all()]);
    }

}
