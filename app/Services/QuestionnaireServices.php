<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Questionnaire;
use App\Models\Questionaire;

class QuestionnaireServices extends Controller
{
    public function showAll(){
       return Questionnaire::all();
    }

    public function storeData($data){
        return Questionnaire::create($data);
    }

    public function showById($id){
        return Questionnaire::find($id);
    }

    public function showByActivityId($activity_id){
        return Questionnaire::where('activity_id',$activity_id)->get();
    }



    // penal code 

    public function storeDataPenalCode($data){
        return Questionaire::create($data);
    }
}
