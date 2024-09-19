<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Renungan>
 */
class RenunganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'bacaan' => fake()->text(),
            'ayat_kunci' => fake()->name(),
            'kalimat_prinsip' => fake()->text(),
            'kalimat_renung' => fake()->text(),
            'date_renungan' => fake()->date(),
            'content_renungan' => fake()->text(),
            'doa' => fake()->text(),
        ];
    }

    
}
