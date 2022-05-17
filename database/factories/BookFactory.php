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
    public function definition()
    {
        return [
            'judul_buku' => $this->faker->words(mt_rand(1, 4), true),
            'slug' => $this->faker->slug(1, 5),
            'penulis' => $this->faker->name(),
            'penerbit' => $this->faker->company(),
            'jumlah_halaman' => $this->faker->numberBetween(80, 500),
            'tahun_terbit' => $this->faker->numberBetween(2000, 2022),
            'genre' => $this->faker->word(),
            'stok' => $this->faker->numberBetween(1, 20),
            'sinopsis' => $this->faker->sentences(mt_rand(3, 7), true),
        ];
    }
}
