<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view ('auth.login');
    }

    public function store (Request $request){
        $this->validate($request, [
            'email' => 'required|email|max:60',
            'password' => 'required',
        ]);
        if (!auth()->attempt($request->only('email','password'),$request->remember)){
            return back()->with('mensaje','Credenciales Incorrectas');
        }
        return redirect()->route('posts.index',auth()->user()->username);
    }
}
