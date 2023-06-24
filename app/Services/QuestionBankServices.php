<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuestionBank;

class QuestionBankServices extends Controller
{
    public function showAll(){
       return QuestionBank::all();
    }

    public function showAllForDataTB(){
        return QuestionBank::select('id','question')->get();
     }

    public function storeData($data){
        return QuestionBank::create($data);
    }

    public function showById($id){
        return QuestionBank::find($id);
    }
}
