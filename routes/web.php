<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('image', \App\Http\Controllers\ImageController::class, ['names' => 'image']);
