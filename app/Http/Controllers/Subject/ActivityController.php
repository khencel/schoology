<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function show($subject_id){
        $data['subject_id'] = $subject_id;
        return view('page.subject.show',$data);
    }

    public function add($subject_id){
        $data['subject_id'] = $subject_id;
        return view('page.subject.activity.add',$data);
    }
}
