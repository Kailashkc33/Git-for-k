<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/QuizMasterPro', function () {
    return view('QuizMasterPro');
});

Route::get('/loginpage', function () {
    return view('loginpage');
});