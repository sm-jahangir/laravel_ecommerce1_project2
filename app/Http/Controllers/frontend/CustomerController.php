<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function submit(Request $request)
    {
        $customer = array(
            'customer_name' => $request->input('customer_name'),
            'customer_email' => $request->input('customer_email'),
            'mobile_number' => $request->input('customer_number'),
            'customer_password' => md5($request->input('customer_password')),
        );
        DB::table('tbl_customer')->insert($customer);
        $request->session()->flash('msg', 'Sign Up Complete');
        return redirect('/login');
    }

    
    public function login(Request $request)
    {
        $customer_email = $request->input('customer_email');
        $customer_password = md5($request->input('customer_password'));
        $result = DB::table('tbl_customer')
                        ->where('customer_email', $customer_email)
                        ->where('customer_password', $customer_password)
                        ->get();
            if (isset($result[0]->customer_id)) {
               $request->session()->put('CUSTOMER_ID', $result[0]->customer_id);
               $request->session()->put('customer_email', $result[0]->customer_email);
               $request->session()->put('customer_name', $result[0]->customer_name);
               return redirect('login');
            }else{
                $request->session()->flash('msg', 'Wrong Email or Password');
                return redirect('login');
            }
    }
    public function logout()
    {
        session()->forget('CUSTOMER_ID');
        return redirect('login');
    }
}
