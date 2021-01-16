<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function list()
    {
        $data['result'] = DB::table('tbl_brand')->orderBy('id', 'desc')->get();
        return view('backend/brand/list',$data);
    }
    public function submit(Request $request)
    {
        $data = array(
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        );
        DB::table('tbl_brand')->insert($data);
        $request->session()->flash('msg', 'Brand Added Successfully');
        return redirect('admin/brand/list');
    }
    public function unactive(Request $request, $id)
    {
        $data = array('status' => 0, );
        DB::table('tbl_brand')->where('id',$id)->update($data);
        $request->session()->flash('msg', 'Brand Updated Successfully');
        return redirect('admin/brand/list');
    }
    public function active(Request $request, $id)
    {
        $data = array('status' => 1, );
        DB::table('tbl_brand')->where('id',$id)->update($data);
        $request->session()->flash('msg', 'Brand Updated Successfully');
        return redirect('admin/brand/list');
    }
    public function edit(Request $request, $id)
    {
        $data['result'] = DB::table('tbl_brand')->where('id', $id)->get();
        return view('backend/brand/edit',$data);
    }
    public function update(Request $request, $id)
    {
        $data = array(
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        );
        DB::table('tbl_brand')->where('id', $id)->update($data);
        $request->session()->flash('msg', 'brand Updated Successfully');
        return redirect('admin/brand/list');
    }
    public function delete(Request $request, $id)
    {
        DB::table('tbl_brand')->where('id', $id)->delete();
        $request->session()->flash('msg','brand Deleted');
        return redirect('admin/brand/list');
    }
}
