<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'ISBN' => $this->faker->isbn13,
            'author' => $this->faker->name,
            'category' => $this->faker->word,
            'number_of_pages' => $this->faker->numberBetween(100, 500),
            'publishing_year' => $this->faker->year,
        ];
    }
}
