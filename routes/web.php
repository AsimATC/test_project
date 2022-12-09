<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hakkimda', function () {
    return "Asım Atıcı" ;
});
