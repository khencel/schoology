<?php

Route::prefix('penal-code/books')
    ->namespace('\App\Http\Controllers\PenalCode')
    ->group(function(){
    Route::get('/v','PenalCodeDetailsController@show');
    Route::post('/create','PenalCodeDetailsController@create');
});

Route::prefix('question')
            ->namespace('\App\Http\Controllers\PenalCode')
            ->group(function(){
                route::post('/create/v','PenalCodeDetailsController@createQuestion');
                route::post('/create/identification/v','PenalCodeDetailsController@createQuestion');
            });
