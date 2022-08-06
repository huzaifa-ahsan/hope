<?php

namespace Database\Seeders;

use App\Models\Fruit;      
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FruitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fruit ::Factory()->count(50)->create();    //it will create our sample data. 
    }
}
