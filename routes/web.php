<?php

use App\Http\Controllers\SayfalarController;
use App\Http\Controllers\UyelerController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view("anasayfa");
});



