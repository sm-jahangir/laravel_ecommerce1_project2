<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function submit(Request $request)
    {
        $product_image = $request->file('product_image');
        $ext = $product_image->extension();
        $file = time(). '.'.$ext;
        $product_image->storeAs('public/product', $file);

        $data = array(
            'product_name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'brand_id' => $request->input('brand_id'),
            'product_short_description' => $request->input('product_short_description'),
            'product_long_description' => $request->input('product_long_description'),
            'price' => $request->input('price'),
            'product_size' => $request->input('product_size'),
            'product_color' => $request->input('product_color'),
            'publication_status' => $request->input('publication_status'),
            // 'created_at' => $request->input('created_at'),
            'product_image' => $file,
        );
        // echo "<pre>";
        // print_r($data);

        DB::table('tbl_products')->insert($data);
        $request->session()->flash('msg', 'Product Inserted');
        return redirect('admin/products/list');
    }
    // public function listing()
    // {
    //     $data['result'] = DB::table('tbl_products')->orderBy('product_id', 'desc')->get();
    //     return view('/backend/products/list',$data);
    // }
    public function listing()
    {
        $data['result'] = DB::table('tbl_products')
                        ->join('tbl_category', 'tbl_products.category_id','=','tbl_category.id')
                        ->join('tbl_brand', 'tbl_products.brand_id','=','tbl_brand.id')
                        ->get();

                        // echo "<pre>";
                        // print_r($data);
                        // die();
        return view('/backend/products/list',$data);
    }




    public function unactive(Request $request, $product_id)
    {
        $data = array(
            'publication_status' => 0,
        );
        DB::table('tbl_products')->where('product_id', $product_id)->update($data);
        $request->session()->flash('msg', 'Product Unactive');
        return redirect('admin/products/list');
    }
    public function active(Request $request, $product_id)
    {
        $data = array(
            'publication_status' => 1,
        );
        DB::table('tbl_products')->where('product_id', $product_id)->update($data);
        $request->session()->flash('msg', 'Product Active');
        return redirect('admin/products/list');
    }
    public function delete(Request $request, $product_id)
    {
        DB::table('tbl_products')->where('product_id', $product_id)->delete();
        $request->session()->flash('msg', 'Product Deleted');
        return redirect('admin/products/list');
    }

    public function edit($product_id)
    {
        $data['result'] = DB::table('tbl_products')->where('product_id', $product_id)->get();
       return view('backend/products/edit', $data);
    }
    public function update(Request $request, $product_id)
    {
        $data = array(
            'product_name' => $request->input('product_name'),
            // 'category_id' => $request->input('category_id'),
            // 'brand_id' => $request->input('brand_id'),
            'product_short_description' => $request->input('product_short_description'),
            'product_long_description' => $request->input('product_long_description'),
            'price' => $request->input('price'),
            'product_size' => $request->input('product_size'),
            'product_color' => $request->input('product_color'),
            'publication_status' => $request->input('publication_status'),
            'updated_at' => date('Y-m-d h:i:s'),
        );

        if ($request->hasFile('product_image')) {
            $product_image = $request->file('product_image');
            $ext = $product_image->extension();
            $file = time().'.'.$ext;
            $product_image->storeAs('public/product', $file);
            $data['product_image'] = $file;
        }

        DB::table('tbl_products')->where('product_id', $product_id)->update($data);
        $request->session()->flash('msg', 'Product Updated');
        return redirect('admin/products/list');

    }










}
