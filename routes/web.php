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
    return view('page.guest.lettering');
});

Route::get('/jurisprudence', function () {
    return view('page.guest.jurisprudence');
});

Route::get('/about-us', function () {
    return view('page.guest.aboutUS');
});

Route::get('/contact-us', function () {
    return view('page.guest.contactUS');
});

Route::get('/privacy-policy', function () {
    return view('page.guest.policy');
});

Route::get('/jurisprudence/show/case/{id}',[App\Http\Controllers\Jurisprudence\JurisprudenceController::class,'showCase']);


Route::get('/sample',[App\Http\Controllers\Jurisprudence\JurisprudenceController::class,'jurisprudenceIndex']);

Auth::routes();
require __DIR__ .'/User/Auth.php';

Route::group( ['middleware' => 'auth' ], function()
{
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    require __DIR__ .'/Jurisprudence/Resource.php';
    require __DIR__ .'/Course/Resource.php';
    require __DIR__ .'/Subject/Resource.php';
    require __DIR__ .'/Penal-code/Resource.php';
    require __DIR__ .'/Penal-code/PenalCodeDetails.php';
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
