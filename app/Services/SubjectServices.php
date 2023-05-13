<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectServices extends Controller
{
    public function showAll(){
       return Subject::all();
    }

    public function storeData($data){
        return Subject::create($data);
    }

    public function showById($id){
        return Subject::find($id);
    }

    public function showByCourseId($course_id){
        return Subject::where('course_id',$course_id)->get();
    }
}
