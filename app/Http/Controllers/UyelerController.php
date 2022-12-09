<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UyelerController extends Controller{

    public function hakkimda() {
        return view("sayfa.iletisim");
    }

}
