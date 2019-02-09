<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use App\Models\Cart;
use Illuminate\Http\Request;

use Session;

class CartController extends Controller
{
    public function getAddToCart(Request $request, $id)
    {
        $pizza = Pizza::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($pizza, $pizza->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('home');
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('cart.show', ['products' => []]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart.show', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCartConfirm()
    {
        if (!Session::has('cart')) {
            return view('cart.show', ['products' => []]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('cart.confirm', ['total' => $total]);
    }
}
