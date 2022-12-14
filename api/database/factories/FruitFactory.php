<?php

namespace Database\Factories;

use App\Models\Fruit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fruit>
 */
class FruitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model 
     * 
     *@var string 
     */
    protected $model = Fruit::class;
    
    /**
     * Define the model's default state.
     *
     *@return  array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(), 
            "price" => rand(50,500),
            "qty" => random_int(5,20),
             
        ];
    }
}
