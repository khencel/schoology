<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Course;

class CourseController extends Controller
{
    public function __invoke(){
        $data['courses'] = (new \App\Services\CourseServices)->showAll();
        return view('page.course.index',$data);
    }

    public function store(Course $course){
        return (new \App\Services\CourseServices)->storeData($course->toArray());
    }

    public function update(Request $request,$course_id){
        $course = (new \App\Services\CourseServices)->showById($course_id);
        return $course->update($request->all());
    }

    public function delete($course_id){
        $course = (new \App\Services\CourseServices)->showById($course_id);
        return $course->delete();
    }
}
