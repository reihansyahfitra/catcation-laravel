<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $dataPackage = \App\Models\Package::all();
        return view('index', ['packages' => $dataPackage]);
    }
    public function login(){
        return view('login', ['errorEmail' => '', 'errorPass' => '', 'email' => '']);

    }
    public function loginPost(Request $request){
        $email = $request->input('email-address');
        $password = $request->input('pass-word');
        $dataUser = \App\Models\User::where('email', $email)->first();
        if($dataUser){
            if($password == $dataUser->password){
                return redirect('/')->with('success', 'Login berhasil');
            }else{
                return view('login', ['errorEmail' => '', 'errorPass' => 'Password salah', 'email' => $email]);
            }
        }else{
            return view('login', ['errorEmail' => 'Email tidak terdaftar', 'errorPass' => '', 'email' => '']);
        }
    }
    public function register(){
        return view('register');
    }
}
