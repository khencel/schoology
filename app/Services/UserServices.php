<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserServices extends Controller
{
    public function showAll(){
       return User::all();
    }

    public function storeData($data){
        $data['password'] = Hash::make($data['password']);
        return User::create($data);
    }

    public function showById($id){
        return User::find($id);
    }

}
