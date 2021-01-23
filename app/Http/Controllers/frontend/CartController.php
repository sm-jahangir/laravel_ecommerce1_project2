<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

// use Illuminate\Support\Facades\Redirect;
// use Cart;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function add_to_cart(Request $request)
    {
        $qty = $request->input('product_quantity');
        $product_id = $request->input('product_id');
        $product_info = DB::table('tbl_products')
                        ->where('product_id',$product_id)
                        ->get();
// echo "<pre>";
// print_r($qty);
// die();

        $data['qty'] = $qty;
        $data['id'] = $product_info[0]->product_id;
        $data['name'] = $product_info[0]->product_name;
        $data['price'] = $product_info[0]->price;
        $data['options']['image'] = $product_info[0]->product_image;
// echo "<pre>";
// print_r($data['options']['image']);
// die();
        Cart::add($data);
        return redirect('/shop/show-cart');

    }

    public function show_cart()
    {
        $all_published_category = DB::table('tbl_category')
                                ->where('status', 1)
                                ->get();

        return view('frontend/shop/add-to-cart',$all_published_category);
    }
}
