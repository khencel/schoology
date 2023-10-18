<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PenalCodeDetail;


class PenalCodeDetailsServices extends Controller
{
    public function showAll(){
       return PenalCodeDetail::first();
    }

    public function storeData($data){
       
        return PenalCodeDetail::updateOrCreate(
            [
                'db_model'  =>  $data['db_model'],
                'parent_id' =>  $data['parent_id']
            ],
            $data
        );
    }

    public function getTitle($id){
        return PenalCodeDetail::with('title.book')
                    ->where('parent_id',$id)
                    ->where('db_model','\App\Models\Title')
                    ->first();
    }

    public function getChapter($id){
        return PenalCodeDetail::where('parent_id',$id)
                    ->where('db_model','\App\Models\Chapter')
                    ->first();
    }

    public function getSection($id){
        return PenalCodeDetail::where('parent_id',$id)
                    ->where('db_model','\App\Models\Section')
                    ->first();
    }

    public function getBook($id){
        return \App\Models\Book::find($id);
    }

    public function getTitleDetails($id){
        return \App\Models\Title::find($id);
    }

    public function getChapterDetails($id){
        return \App\Models\Chapter::find($id);
    }

    public function getSectionDetails($id){
        return \App\Models\Section::find($id);
    }

    // public function showById($id){
    //     return Activity::find($id);
    // }

    // public function showBySubjectId($subject_id){
    //     return Activity::with('questionnaire')->where('subject_id',$subject_id)->get();
    // }

    public function getQuestion($id,$model,$type){
        return \App\Models\Questionaire::where('parent_id',$id)
                                        ->where('model',$model)
                                        ->where('type',$type)
                                        ->get();
    }

}
