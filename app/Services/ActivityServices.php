<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityServices extends Controller
{
    public function showAll(){
       return Activity::all();
    }

    public function storeData($data){
        return Activity::create($data);
    }

    public function showById($id){
        return Activity::find($id);
    }

    public function showBySubjectId($subject_id){
        return Activity::with('questionnaire')->where('subject_id',$subject_id)->get();
    }

}
