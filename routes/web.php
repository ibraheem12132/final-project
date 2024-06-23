<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::group([

'middeleware'=>'isadmin'
],function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


});

Route::get('/landing', function () {
    return view('landing');
})->name('index');
