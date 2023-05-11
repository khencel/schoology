<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Subject;

class SubjectController extends Controller
{
    public function subjectPerCourse($course_id){
        $data['course_id'] = $course_id;
        $data['subjects'] = (new \App\Services\SubjectServices)->showByCourseId($course_id);
        return view('page.subject.index',$data);
    }

    public function store(Subject $subject){
        return (new \App\Services\SubjectServices)->storeData($subject->all());
    }
}
