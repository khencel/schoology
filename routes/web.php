<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landingPage');
});



Auth::routes();
require __DIR__ .'/User/Auth.php';

Route::group( ['middleware' => 'auth' ], function()
{
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    require __DIR__ .'/Jurisprudence/Resource.php';
    require __DIR__ .'/Course/Resource.php';
    require __DIR__ .'/Subject/Resource.php';
});

Route::get('/migrate', function() {
    $output = [];
    \Artisan::call('migrate', $output);
    dd($output);
});

Route::get('/db-seed', function() {
    $output = [];
    \Artisan::call('db:seed', $output);
    dd($output);
});
