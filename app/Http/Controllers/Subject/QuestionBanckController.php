<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Datatables;

class QuestionBanckController extends Controller
{
    public function __invoke(){
        $data = (new \App\Services\QuestionBankServices)->showAllForDataTB();
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function($row){
                $html = $row->question;
                return $html;
            })->addColumn('button', function($row){
                $html = '
                            <span role="button" style="width:100px" class="badge bg-info" onclick="viewEditQuestionBank('.htmlentities($row).')">View</span>
                            <span role="button" style="width:100px" class="badge bg-danger" onclick="deleteQuestionBank('.$row->id.')">Delete</span>
                        ';
                return $html;
            })
    ->rawColumns(['action','button'])
    ->make(true);
    }

    public function store(Request $request){
        (new \App\Services\QuestionBankServices)->storeData($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $question_bank_id){
        $question = (new \App\Services\QuestionBankServices)->showById($question_bank_id);
        return $question->update($request->all());
    }

    public function delete($question_bank_id){
        $question = (new \App\Services\QuestionBankServices)->showById($question_bank_id);
        $question->delete();
        return redirect()->back();
    }
}
