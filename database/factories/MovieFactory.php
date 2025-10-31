<?php

namespace Database\Factories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'genre_id' => Genre::factory(),
            'duration' => $this->faker->randomDigit(),
            'description' => $this->faker->text(),
            'release_date' => $this->faker->date(),
        ];
    }
}
