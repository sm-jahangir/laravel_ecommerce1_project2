<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function submit(Request $request)
    {
        $data = array(
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        );
        DB::table('tbl_category')->insert($data);
        $request->session()->flash('msg', 'Category Inserted Successfully');
        return redirect('admin/category/list');
    }
    public function list()
    {
        $data['result'] = DB::table('tbl_category')->orderBy('id','desc')->get();
        return view('backend/category/list', $data);
    }
    public function unactive(Request $request, $id)
    {
        $data = array('status' => 0, );
        DB::table('tbl_category')->where('id', $id)->update($data);
        $request->session()->flash('msg', 'Category Updated Successfully');
        return redirect('admin/category/list');
    }
    public function active(Request $request, $id)
    {
        $data = array('status' => 1,);
        DB::table('tbl_category')->where('id', $id)->update($data);
        $request->session()->flash('msg', 'Category Updated Successfully');
        return redirect('admin/category/list');
    }
    public function edit(Request $request, $id)
    {
        $data['result'] = DB::table('tbl_category')->where('id', $id)->get();
        return view('backend/category/edit', $data);
    }
    public function update(Request $request, $id)
    {
        $data = array(
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        );
        DB::table('tbl_category')->where('id', $id)->update($data);
        $request->session()->flash('msg', 'Category Updated Successfully');
        return redirect('admin/category/list');
    }
    public function delete(Request $request, $id)
    {
        DB::table('tbl_category')->where('id', $id)->delete();
        $request->session()->flash('msg','Category Deleted');
        return redirect('admin/category/list');
    }
}
