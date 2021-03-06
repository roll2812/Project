<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function loginAdmin() {
       
        if(auth()->check()) {
            return redirect()->to('home');
        }
       return view('login');
    }
    public function postLoginAdmin(Request $request) {
      
        $remember = $request->has('remember_me') ? true : false;
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(auth()->attempt($data, $remember)) {
            return redirect()->to('home');
        }else {
            return redirect()->back()->with('status', 'Email or Password is incorrect !');
        };
    }

    public function logoutAdmin() {
        Auth::logout();
        return redirect()->to('admin');
    }
}
