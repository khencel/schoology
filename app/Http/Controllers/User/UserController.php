<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;

class UserController extends Controller
{
    public function loginUser(Request $request){
        $credentials = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (\Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return response([
                'status' => "success",
                'user'      =>  \Auth::user()
            ]);
        }
        return "Opps! You have entered invalid credentials";
    }

    public function registerUser(RegistrationRequest $registrationRequest){
        return (new \App\Services\UserServices)->storeData($registrationRequest->all());
    }
}
