<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Genre;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Series>
 */
class SeriesFactory extends Factory
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
            'season_count' => $this->faker->numberBetween(1, 20),
            'episode_count' => $this->faker->numberBetween(1, 100),
            'description' => $this->faker->text(),
            'release_date' => $this->faker->date(),
        ];
    }
}
