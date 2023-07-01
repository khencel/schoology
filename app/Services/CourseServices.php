<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseServices extends Controller
{
    public function showAll(){
       return Course::with('subject')->get();
    }

    public function storeData($data){
        return Course::create($data);
    }

    public function showCaseByCaseNo($case_no){
        
    }

    public function showById($id){
        return Course::find($id);
    }
}
