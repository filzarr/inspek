<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class LoginController extends Controller
{
    public function index(){
        return view("admin.auth.login");
    }
    public function authenticate(Request $request){
        
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
            
        ]);
        if (Auth::Attempt($credentials)) {
            $request->session()->regenerate();
            // echo'berhasil';
            return redirect('/admin');
        }
        else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login');
        }
    }
      
    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/login');
    }
}
