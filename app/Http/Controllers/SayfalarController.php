<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class SayfalarController extends Controller
{

    public function asi()
    {
        $dizi = [
            "adi" => "Asım",
            "soyadi" => "Atıcı"
        ];
        return view("sayfa.hakkimda")->with("diziler", $dizi);
    }
}
