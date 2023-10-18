<?php

namespace App\Http\Controllers\PenalCode;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\QuestionnaireServices as QuestionnaireServices;

class PenalCodeDetailsController extends Controller
{
    public function show(Request $request){
        $request['title_id'] = $request->title;
        $request['chapter_id'] = $request->chapter??null;
        $request['section_id'] = $request->section??null;
        $id = getParentId($request->all());
        $request['id'] = $id;
        
        $data['details'] = getDetails($request->all());
        $data['book'] =  (new \App\Services\PenalCodeDetailsServices)->getBook($request->book);
        $data['title'] = (new \App\Services\PenalCodeDetailsServices)->getTitleDetails($request->title);
        $data['chapter'] = (new \App\Services\PenalCodeDetailsServices)->getChapterDetails($request->chapter);
        $data['section'] = (new \App\Services\PenalCodeDetailsServices)->getSectionDetails($request->section);
        
        $res = getQuestionPenalCode($request->all());
        $data['question_tf'] = (new \App\Services\PenalCodeDetailsServices)->getQuestion($res['id'], $res['model'],'trueOrFalse');
        $data['question_identification'] = (new \App\Services\PenalCodeDetailsServices)->getQuestion($res['id'], $res['model'],'identification');

        return view('page.penal-code.show',$data,[
            'book'  =>  request('book'),
            'title' =>  request('title'),
            'chapter' =>  request('chapter'),
            'section' =>  request('section'),
            'cat' => request('cat'),
            'type'  =>  request('type')
        ]);
    }

    public function create(Request $request){
        $request['db_model'] = getModel($request->all());
        $request['parent_id'] = getParentId($request->all())['id'];
    
        $data = $request->except('book_id','title_id','chapter_id','section_id');
        return (new \App\Services\PenalCodeDetailsServices)->storeData($data);
        
    }

    public function createQuestion(Request $request){
        $res = getParentIdQuestionaire($request->all());
        $data['parent_id'] = $res['parent_id'];
        $data['model'] = $res['model'];
        $data['question'] = $request->question;
        $data['answer'] = $request->answer;

        if($request->type == "true_or_false"){
            $data['type']   = "trueOrFalse";
        }

        if($request->type == "identification"){
            $data['type']   = "identification";
        }
        
        return (new QuestionnaireServices)->storeDataPenalCode($data);
    }
}

function getModel($data){
    
    if($data['title_id']){
        $model = "\App\Models\Title";
    }

    if($data['chapter_id']){
        $model = "\App\Models\Chapter";
    }

    if($data['section_id']){
        $model = "\App\Models\Section";
    }

    return $model;
}

function getParentId($data){
    if($data['title_id']){
        $parent_id = $data['title_id'];
    }

    if($data['chapter_id']){
        $parent_id = $data['chapter_id'];
    }

    if($data['section_id']){
        $parent_id = $data['section_id'];
    }

    return $parent_id;
}

function getDetails($data){
    if($data['cat'] == 'title'){
    
        $data = (new \App\Services\PenalCodeDetailsServices)->getTitle($data['id']);
    }

    if($data['cat']??null == 'chapter'){
        
        $data = (new \App\Services\PenalCodeDetailsServices)->getChapter($data['id']);
    }

    if($data['cat']??null == 'section'){
        
        $data = (new \App\Services\PenalCodeDetailsServices)->getSection($data['id']);
    }

    return $data??null;

}

function getParentIdQuestionaire($request){
    $id = $request['title'];
    $model = "\App\Models\Title";
    if($request['chapter'] != null){
        $id =  $request['chapter'];
        $model = "\App\Models\Chapter";
    }

    if($request['section']??null){
        $id = $request['section'];
        $model = "\App\Models\Section";
    }
    return [
        'parent_id' => $id,
        'model' =>  $model
    ];
}


function getQuestionPenalCode($request){
    $id = null;
    $model = null;
    if($request['cat'] == "title"){
        $res['id'] = $request['title'];
        $res['model'] = "\App\Models\Title";
    }

    if($request['cat'] == "chapter"){
        $res['id'] = $request['chapter'];
        $res['model'] = "\App\Models\Chapter";
    }

    if($request['cat'] == "section"){
        $res['id'] = $request['section'];
        $res['model'] = "\App\Models\Section";
    }

    return $res;
}
