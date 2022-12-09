<?php

use App\Http\Controllers\UyelerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ("/sayfa/hakkimda" , [ 'isim' => 'Asim', 'soyisim' => 'Atıcı' ] );
});





