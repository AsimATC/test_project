<?php

use App\Http\Controllers\SayfalarController;
use App\Http\Controllers\UyelerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sayfalarControllers;
use App\Http\Controllers\linklerControllers;



Route::get('/', function () {
    return view("welcome");
});

