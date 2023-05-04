<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurisprudence;

class JurisprudenceServices extends Controller
{
    public function showAll(){
        return Jurisprudence::paginate(10);
    }

    public function storeData($data){
        return Jurisprudence::create($data);
    }
}
