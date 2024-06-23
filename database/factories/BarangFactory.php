<?php

namespace Database\Factories;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // protected $model = Barang::class;

    public function definition(): array
    {
        return [
            'id' => fake()->unique()->regexify('B-[0-9]{6}'),
            'nama' => fake()->word(),
            'kategori_id' => fake()->numberBetween(1, 3),
            'satuan_id' => fake()->numberBetween(1, 3),
            'harga' => fake()->randomNumber(4, true),
            'stok' => fake()->randomNumber(3, false),
        ];
    }
}