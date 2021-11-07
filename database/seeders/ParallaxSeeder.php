<?php

namespace Database\Seeders;

use App\Models\Parallax;
use Illuminate\Database\Seeder;

class ParallaxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parallax::factory(10)->create();
    }
}
