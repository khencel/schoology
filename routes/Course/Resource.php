<?php

Route::prefix('course')
    ->name('course')
    ->namespace('\App\Http\Controllers\Course')
    ->group(function(){
    Route::get('/index','CourseController')->name('index');
    Route::post('/store','CourseController@store')->name('store');
    Route::put('/update/{course_id}','CourseController@update')->name('update');
    Route::get('/delete/{course_id}','CourseController@delete')->name('delete');
});