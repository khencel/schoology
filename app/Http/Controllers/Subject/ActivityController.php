<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function show($subject_id){
        $data['subject_id'] = $subject_id;
        $data['activity'] = (new \App\Services\ActivityServices)->showBySubjectId($subject_id);
        return view('page.subject.show',$data);
    }

    public function add($subject_id){
        $data['activity_id']    = $subject_id;
        $data['activity']       = (new \App\Services\ActivityServices)->showById($data['activity_id']);
        $data['questionnaire']  = (new \App\Services\QuestionnaireServices)->showByActivityId($data['activity_id']);
        $data['subject_id']     = $subject_id;
        
        return view('page.subject.activity.add',$data);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required'
        ]);
        return (new \App\Services\ActivityServices)->storeData($request->all());
    }

    public function update(Request $request,$activity_id){
        $activity = (new \App\Services\ActivityServices)->showById($activity_id);
        return $activity->update($request->all());
    }
}
