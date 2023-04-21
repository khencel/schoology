<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginUser(Request $request){
        $credentials = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (\Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return "success";
        }
        return "Opps! You have entered invalid credentials";
    }
}
