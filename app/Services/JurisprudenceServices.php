<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurisprudence;

class JurisprudenceServices extends Controller
{
    public function showAll($year,$month){
        $month = $this->monthConvertionNumber($month);
        return Jurisprudence::whereYear('date_case',$year)
                                ->whereMonth('date_case',$month)->get();
    }

    public function storeData($data){
        return Jurisprudence::create($data);
    }

    public function showCaseByCaseNo($case_no){
        return Jurisprudence::where('case_no',$case_no)->first();
    }

    public function showById($id){
        return Jurisprudence::find($id);
    }

    public function monthConvertionNumber($month){
        switch ($month) {
            case 'January':
                return 1;
                break;
            case 'February':
                return 2;
                break;
            case 'March':
                return 3;
                break;
            case 'April':
                return 4;
                break;
            case 'May':
                return 5;
                break;
            case 'June':
                return 6;
                break;
            case 'July':
                return 7;
                break;
            case 'August':
                return 8;
                break;
            case 'September':
                return 9;
                break;
            case 'October':
                return 10;
                break;
            case 'November':
                return 11;
                break;
            case 'December':
                return 12;
                break;
        }
    } 

}
