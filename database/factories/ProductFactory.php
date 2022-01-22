<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title'=>$this->faker->unique->words(4,true),
            'picture'=>$this->faker->image('public/storage/uploads',700,850,null,false),
            'description'=>$this->faker->text(500),
            'is_active'=>$this->faker->numberBetween(0,1),
            'soft_delete'=>$this->faker->numberBetween(0,1),
            'mrp'=>$this->faker->randomFloat(2,10,100),
            'special_price'=>$this->faker->randomFloat(2,10,50),
            'total_sales'=>$this->faker->numberBetween(1,10),
            'category_id'=>$this->faker->numberBetween(1,5)
        ];
    }
}
