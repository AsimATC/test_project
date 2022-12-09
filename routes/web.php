<?php

use App\Http\Controllers\UyelerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Controller Kullanımı
Route::get("/hakkimda", [UyelerController::class, "hakkimda"]);

// Grup Link Kullanımı
Route::group(["prefix" => "sayfalar"], function() {
    Route::get('/hakkimda', function () {
        return "hakkımda sayfası olacaktır";
    });

    Route::get('/iletisim', function () {
        return "İletişim sayfası olacaktır";
    });
});


