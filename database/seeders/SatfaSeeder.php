<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatfaSeeder extends Seeder

{
    public function run()
    {
        DB::table("sayfa")->insert([
            "sayfa_adi" => "Hakkimizda",
            "sayfa_no" => 2
        ]);
    }
}
