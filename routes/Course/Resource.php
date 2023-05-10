<?php

Route::prefix('course')
    ->name('course')
    ->namespace('\App\Http\Controllers\Course')
    ->group(function(){
    Route::get('/index','CourseController')->name('index');
    Route::post('/store','CourseController@store')->name('store');
});