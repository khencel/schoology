<?php

Route::prefix('subject')
    ->name('subject')
    ->namespace('\App\Http\Controllers\Subject')
    ->group(function(){
    Route::get('/index/{course_id}','SubjectController@subjectPerCourse')->name('index');
    Route::post('/store','SubjectController@store')->name('store');
    Route::get('/delete/{subject_id}','SubjectController@delete')->name('delete');
    Route::put('/update/{subject_id}','SubjectController@update')->name('update');
    

    Route::prefix('activity')
        ->group(function(){
            Route::get('/show/{course_id}/{subject_id}','ActivityController@show')->name('show');
            Route::get('/add/{subject_id}/{course_id}/{subject}','ActivityController@add');
            Route::post('/store','ActivityController@store');
            Route::put('/update/{activity_id}','ActivityController@update');
            Route::get('/delete/{subject_id}/{activity_id}','ActivityController@delete');


            Route::prefix('questionnaire')
            ->namespace('\App\Http\Controllers\Subject')
            ->group(function(){
                Route::get('/index','QuestionController');
                Route::post('/store','QuestionController@store');
                Route::get('/delete/{question_id}','QuestionController@delete');
                Route::post('/update','QuestionController@update');
            });
    });

    Route::prefix('questionBank')
        ->group(function(){
            Route::get('/index/{subject_id}','QuestionBanckController');
            Route::post('/store','QuestionBanckController@store');
            Route::put('/update/{id}','QuestionBanckController@update');
            Route::get('/delete/{id}','QuestionBanckController@delete');
    });
});