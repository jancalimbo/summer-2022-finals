<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Beer;

class BeerSeeder extends Seeder
{
   
    public function run()
    {
        Beer::factory(20)->create();
    }
}
