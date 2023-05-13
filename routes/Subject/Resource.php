<?php

Route::prefix('subject')
    ->name('subject')
    ->namespace('\App\Http\Controllers\Subject')
    ->group(function(){
    Route::get('/index/{course_id}','SubjectController@subjectPerCourse')->name('index');
    Route::post('/store','SubjectController@store')->name('store');
    Route::get('/delete/{subject_id}','SubjectController@delete')->name('delete');
    Route::put('/update/{subject_id}','SubjectController@update')->name('update');
});