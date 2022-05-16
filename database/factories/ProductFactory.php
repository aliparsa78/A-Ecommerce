<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'cat_id'=>$this->faker->numerify('##'),
            'name'=>$this->faker->name(),
            'description'=>$this->faker->text(50),
            'original_price'=>$this->faker->randomFloat(2,0,1),
            'selling_price'=>$this->faker->randomFloat(2,0,1),
            'weight'=>$this->faker->randomFloat(2,0,1),
            'tax'=>$this->faker->randomFloat(2,0,1),
            'qty'=>$this->faker->numerify('##'),
            'live'=>$this->faker->numerify('##'),
        ];
    }
}
