<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Udalost;
use Faker\Generator as Faker;


class UdalostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nazov' => $this->faker->sentence,
            'popis' => $this->faker->paragraph,
            'datum_uskutocnenia' => $this->faker->date(),
            'miesto' => $this->faker->city,
        ];
    }
}
