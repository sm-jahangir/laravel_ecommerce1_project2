<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login()
    {
        return view('backend/login');
    }
    public function submit(Request $request)
    {
        $username = $request->input('username');
        $password = md5($request->input('password'));
        $result = DB::table('tbl_admin')
                            ->where('username', $username)
                            ->where('password', $password)
                            ->get();
        if (isset($result[0]->id)) {
            $request->session()->put('BLOG_USER_ID',$result[0]->id);
            $request->session()->put('BLOG_USER_NAME',$result[0]->name);
            $request->session()->put('BLOG_USER_EMAIL',$result[0]->email);
            return redirect('admin/dashboard');
        } else {
           $request->session()->flash('msg', "Worng Username and Password");
           return redirect('admin/login');
        }
    }
    public function logout()
    {
        session()->forget('BLOG_USER_ID');
        return redirect('admin/login');
    }

}
