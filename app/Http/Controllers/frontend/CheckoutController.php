<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function cart_to_checkout()
    {
        return view('frontend/shop/checkout');
    }
}
