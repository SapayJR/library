<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->firstName(),
            'category_id' => Category::inRandomOrder()->first(),
            'price' => $this->faker->randomNumber(),
            'user_id' => User::all()->random()->first(),
            'description' => $this->faker->text(22),
            'publish_date' => $this->faker->date(),
            'alias' => $this->faker->name()
        ];
    }
}
