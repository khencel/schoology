<?php

Route::prefix('subject')
    ->name('subject')
    ->namespace('\App\Http\Controllers\Subject')
    ->group(function(){
    Route::get('/index/{course_id}','SubjectController@subjectPerCourse')->name('index');
    Route::post('/store','SubjectController@store')->name('store');
});