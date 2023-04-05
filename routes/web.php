<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;


Auth::routes();

Route::resource('home',HomeController::class);
Route::get('/', function () {
    return view('welcome');
});
Route::resource('nasabah',NasabahController::class);

//Route search
Route::get('/search', [NasabahController::class, 'search'])->name('search');
