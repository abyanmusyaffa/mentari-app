<?php

namespace Database\Factories;

use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelanggan>
 */
class PelangganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->unique()->regexify('P-2407\d{5}'),
            'nama' => fake()->name(),
            'alamat' => fake()->address(),
            'hp' => fake()->phoneNumber(),
            'diskon' => fake()->randomElement([5, 10, 15, 20])
        ];
    }
}
