<?php

Route::prefix('jurisprudence')
    ->name('jurisprudence')
    ->namespace('\App\Http\Controllers\Jurisprudence')
    ->group(function(){
    Route::get('/index','JurisprudenceController@index')->name('index');
    Route::get('/index/month','JurisprudenceController@monthList')->name('monthList');
    Route::get('/index/month/case','JurisprudenceController@caseList')->name('caseList');
    Route::post('/store','JurisprudenceController@store')->name('store');
    Route::get('/show/{case_no}','JurisprudenceController@show')->name('show');
    Route::put('/update/{jurisprudence_id}','JurisprudenceController@update')->name('update');
    Route::get('/delete/{jurisprudence_id}','JurisprudenceController@delete')->name('delete');
});