<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sayfalarControllers extends Controller
{
    public function sayfa() {
        return view('hakkimizda');
    }
}
