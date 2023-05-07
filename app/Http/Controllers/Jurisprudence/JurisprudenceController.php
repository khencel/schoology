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
        $data['jurisprudence'] = (new \App\Services\JurisprudenceServices)->showAll(request('year'),request('month'));
        return view('page.jurisprudence.case',$data);
    }

    public function store(Request $request){
        $month = (new \App\Services\JurisprudenceServices)->monthConvertionNumber($request->month);
        $date = $request->year.'-'.$month.'-'.$request->day;
        $request['date_case'] = $date;
        try {
            (new \App\Services\JurisprudenceServices)->storeData($request->except(['year','month','day']));
            return redirect('/jurisprudence/index/month/case?year='.$request->year.'&month='.$request->month);
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function show($case_no){
        $data['jurisprudence'] = (new \App\Services\JurisprudenceServices)->showCaseByCaseNo($case_no);
        return view('page.jurisprudence.show',$data);
    }

    public function update(Request $request,$id){
        $req_data = (new \App\Services\JurisprudenceServices)->showById($id);
        $req_data->update($request->all());

        return redirect()->back();
    }

    public function delete($id){
        $req_data = (new \App\Services\JurisprudenceServices)->showById($id);
        $req_data->delete();
        return $req_data->date_case;
    }
}
