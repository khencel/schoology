<?php

Route::prefix('jurisprudence')
    ->name('jurisprudence')
    ->namespace('\App\Http\Controllers\Jurisprudence')
    ->group(function(){
    Route::get('/index','JurisprudenceController@index')->name('index');
    Route::get('/index/month','JurisprudenceController@monthList')->name('monthList');
    Route::get('/index/month/case','JurisprudenceController@caseList')->name('caseList');
    Route::post('/store','JurisprudenceController@store')->name('store');
});