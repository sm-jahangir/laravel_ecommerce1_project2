<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function add_to_cart(Request $request)
    {
        $qty = $request->input('product_quantity');
        $product_id = $request->input('product_id');
        $product_info = DB::table('tbl_products')
                        ->where('product_id',$product_id)
                        ->get();
echo "<pre>";
print_r($product_info);
die();

        $data['qty'] = $qty;
        $data['id'] = $product_info->product_id;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->price;
        $data['options']['image'] = $product_info->product_image;
        // Cart::add($data);
        return redirect('/shop/show-cart');
    }
    public function show_cart()
    {
        return view('frontend/shop/cart');
    }
}
