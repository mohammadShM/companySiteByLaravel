<?php

namespace Database\Seeders;

use App\Models\Seo;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{

    public function run()
    {
        // \DB::table('seos')->truncate();
        Seo::factory(10)->create();
    }
}
