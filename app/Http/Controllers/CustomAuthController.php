<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function supplier(){
        return view('supplier');

    }
    public function Admin(){
       return view('admin');
    }
    public function supplierLogin(){
        return view('auth.supplierLogin');

    }
    public function AdminLogin(){
        return view('auth.adminLogin');

    }
    public function checkSupplier(Request $request){
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('supplier')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->intended('/supplier');
        }
        return back()->withInput($request->only('email'));

    }
    public function checkAdmin(Request $request){
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admins')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->intended('/Admin');
        }
        return back()->withInput($request->only('email'));

    }
}

