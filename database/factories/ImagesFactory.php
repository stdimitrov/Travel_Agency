<?php

namespace Database\Factories;

// use App\Models\ ########
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ImagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'remember_token' => Str::random(10),
        ];
    }
}
