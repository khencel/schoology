<?php

Route::prefix('penal-code')
    ->namespace('\App\Http\Controllers\PenalCode')
    ->group(function(){
    Route::get('/books','PenalCodeController');
});