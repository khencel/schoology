<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function __invoke(){
        return 123;
    }

    public function store(Request $request){
       
        if($request->mul_answer){
            $request['answer']  = $request->mul_answer;
        }
        if($request->t_f_answer){
            $request['answer']  = $request->t_f_answer;
        }

        if($request->essay_answer){
            $request['answer']  = $request->essay_answer;
        }
        $request['choices'] = json_encode($request->choices);
        
        (new \App\Services\QuestionnaireServices)->storeData($request->except(['mul_answer','t_f_answer','essay_answer']));
        return back();
    }

    public function delete($question_id){
        $question = (new \App\Services\QuestionnaireServices)->showById($question_id);
        $question->delete();
    }
}
