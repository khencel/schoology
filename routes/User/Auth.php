<?php

Route::prefix('auth')
    ->name('auth')
    ->namespace('\App\Http\Controllers\User')
    ->group(function(){
    Route::post('login-user','UserController@loginUser')->name('login');
});