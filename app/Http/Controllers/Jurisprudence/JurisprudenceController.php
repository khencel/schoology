<?php

namespace App\Http\Controllers\Jurisprudence;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JurisprudenceController extends Controller
{
    public function index(){
        
        return view('page.jurisprudence.index');
    }

    public function monthList(){
        $data['month'] = ['January','February','March','April','May','June','July','August','September','October','November','December',];
        return view('page.jurisprudence.month',$data);
    }

    public function caseList(){
        $data['jurisprudence'] = (new \App\Services\JurisprudenceServices)->showAll();
        
        return view('page.jurisprudence.case',$data);
    }

    public function store(Request $request){
        try {
            (new \App\Services\JurisprudenceServices)->storeData($request->except(['year','month']));
            return redirect('/jurisprudence/index/month/case?year='.$request->year.'&month='.$request->month);
        } catch (\Throwable $th) {
            return $th;
        }
    }
}
