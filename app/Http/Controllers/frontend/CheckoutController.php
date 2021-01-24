<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Cart;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{

    public function cart_to_checkout()
    {
        Cart::destroy();
        return view('frontend/shop/checkout');
    }
}
