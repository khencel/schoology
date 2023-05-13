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

    public function delete($subject_id){
        $subject = (new \App\Services\SubjectServices)->showById($subject_id);
        $subject->delete();
        return $subject->course_id;
    }

    public function update(Request $request,$subject_id){
        $subject = (new \App\Services\SubjectServices)->showById($subject_id);
        return $subject->update($request->all());
    }
}
