<?php

use App\Http\Controllers\UyelerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hakkimda", [UyelerController::class, "hakkimda"]);
