<?php

namespace Database\Seeders;
use App\Models\StreetFood;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StreetFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StreetFood::factory(20)->create();
    }
}
