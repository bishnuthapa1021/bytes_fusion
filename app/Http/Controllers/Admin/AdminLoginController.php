<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    //
    public function adminLogin(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
                return redirect('/admin/dashboard');
            }
            else{
                return redirect()->back();
            }
        }
        return view('backend.admin.login');
    }

    //admin dashboard

    public function adminDashboard(){
        return view('backend.admin.dashboard');
    }
    public function adminLogout(){
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
