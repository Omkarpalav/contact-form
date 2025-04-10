<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/home', function () {
    return view('welcome');
});

Route::get('user-form', function(){
    return view('user-form');
});

Route::post('adduser', [UserController::class, 'addUser']);


// Route:: view('user-form1', 'user-form');