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
        return view('page.jurisprudence.case');
    }
}
