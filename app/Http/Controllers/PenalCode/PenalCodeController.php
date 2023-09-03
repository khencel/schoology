<?php

namespace App\Http\Controllers\PenalCode;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenalCodeController extends Controller
{
    public function __invoke(){
        $book = (new \App\Services\PenalCodeServices)->showAll();
        $data['book'] = $book;
        return view('page.penal-code.index',$data);
    }
}
