<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailsController extends Controller
{
    public function index(Request $request, $product_id)
    {
        $all_products['products'] = DB::table('tbl_products')
                        ->join('tbl_category', 'tbl_products.category_id','=','tbl_category.id')
                        ->join('tbl_brand', 'tbl_products.brand_id','=','tbl_brand.id')
                        ->where('product_id', $product_id)
                        ->get();

                        // echo "<pre>";
                        // print_r($all_products);
                        // die();
        return view('/frontend/shop/product-details',$all_products);

    }
    public function shop()
    {
        $all_shop_product['shop_product_item'] = DB::table('tbl_products')
                        ->join('tbl_category', 'tbl_products.category_id','=','tbl_category.id')
                        ->join('tbl_brand', 'tbl_products.brand_id','=','tbl_brand.id')
                        ->get();

                        // echo "<pre>";
                        // print_r($data);
                        // die();
        return view('/frontend/shop/shop',$all_shop_product);
    }
}
