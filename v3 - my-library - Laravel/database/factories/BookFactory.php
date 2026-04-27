<?php

namespace Database\Factories;

use App\Models\Author; // <-- 1. AGGIUNGI QUESTA RIGA ESATTA QUI
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'year' => fake()->numberBetween(1900, date('Y')),
            'price' => fake()->randomFloat(2, 5, 100),
            'author_id' => Author::factory(), // <-- Ora PHP saprà chi è Author
        ];
    }
}