<?php

namespace Database\Seeders;

use App\Models\sayfa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder

{

    public function run()
    {
$this->call([SatfaSeeder::class]);
    }
}
