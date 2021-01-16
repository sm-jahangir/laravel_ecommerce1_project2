<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        $data['result'] = DB::table('tbl_slider')
                        ->orderBy('slider_id','desc')
                        ->get();
        return view('/backend/mainslider/list',$data);
    }
    public function submit(Request $request)
    {
        $image = $request->file('slider_image');
        $ext = $image->extension();
        $image_file = time().'.'.$ext;
        $image->storeAs('public/slider',$image_file);

        $data = array(
            'slider_name' => $request->input('slider_name'),
            'slider_description' => $request->input('slider_description'),
            'btn_link' => $request->input('slider_btn_link'),
            'slider_status' => $request->input('slider_status'),
            'slider_image' => $image_file,
        );
        DB::table('tbl_slider')->insert($data);
        $request->session()->flash('msg', 'Slider Inserted');
        return redirect('admin/slider/list');
    }
    public function unactive(Request $request,$slider_id)
    {
        $data = array('slider_status' => 0, );
        DB::table('tbl_slider')->where('slider_id', $slider_id)->update($data);
        $request->session()->flash('msg', 'Slider Unactived');
        return redirect('admin/slider/list');
    }
    public function active(Request $request,$slider_id)
    {
        $data = array('slider_status' => 1, );
        DB::table('tbl_slider')->where('slider_id', $slider_id)->update($data);
        $request->session()->flash('msg', 'Slider Actived');
        return redirect('admin/slider/list');
    }
    public function edit(Request $request, $slider_id)
    {
        $data['result'] = DB::table('tbl_slider')->where('slider_id', $slider_id)->get();
        return view('/backend/mainslider/edit',$data);
    }
    public function update(Request $request, $slider_id)
    {
        $data = array(
            'slider_name' => $request->input('slider_name'),
            'slider_description' => $request->input('slider_description'),
            'btn_link' => $request->input('btn_link'),
            'slider_status' => $request->input('slider_status'),
        );
        if ($request->hasFile('slider_image')) {
            $image = $request->file('slider_image');
            $ext = $image->extension();
            $image_file = time().'.'.$ext;
            $image->storeAs('public/slider',$image_file);
            $data['slider_image'] = $image_file;
        }
        DB::table('tbl_slider')->where('slider_id',$slider_id)->update($data);
        $request->session()->flash('msg', 'Slider Updated');
        return redirect('/admin/slider/list');
    }
    public function delete(Request $request, $slider_id)
    {
        DB::table('tbl_slider')->where('slider_id', $slider_id)->delete();
        $request->session()->flash('msg', 'Slider Deleted');
        return redirect('admin/slider/list');
    }
}
