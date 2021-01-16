<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // public function index(){ return view('frontend/index'); }

    public function index()
    {
        $data['feature'] = DB::table('tbl_products')
                        ->join('tbl_category', 'tbl_products.category_id','=','tbl_category.id')
                        ->join('tbl_brand', 'tbl_products.brand_id','=','tbl_brand.id')
                        ->where('publication_status',1)
                        ->limit(6)
                        ->get();

                        // echo "<pre>";
                        // print_r($data);
                        // die();
        return view('/frontend/index',$data);
    }
    public function show_by_cat_home(Request $request, $id)
    {
        $data['catproduct'] = DB::table('tbl_category')
                            ->join('tbl_products', 'tbl_category.id', '=', 'tbl_products.category_id')
                            ->where('id', $id)
                            ->limit(12)
                            ->get();
                            // echo "<pre>";
                            // print_r($data);
                            // die();
        return view('/frontend/product-by-cat-home', $data);
    }
    public function show_by_brand_home(Request $request, $id)
    {
        $data['brandproduct'] = DB::table('tbl_brand')
                            ->join('tbl_products', 'tbl_brand.id', '=', 'tbl_products.brand_id')
                            ->where('id', $id)
                            ->limit(12)
                            ->get();
                            // echo "<pre>";
                            // print_r($data);
                            // die();
        return view('/frontend/product-by-brand-home', $data);
    }
}
