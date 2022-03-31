<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {

        $name = $this->faker->name();
        $slug = str::slug($name, '-');
        return [
            'name' => $name,
            'description' => $this->faker->text(),
            'status' => $this->faker->numberBetween(0, 1),
            'slug' => $slug
        ];
    }
}
