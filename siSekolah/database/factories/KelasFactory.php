<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelas>
 */
class KelasFactory extends Factory
{
    protected $model = \App\Models\Kelas::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fasilitas = array('Papan Tulis Putih', 'Kipas Angin Meja', 'Kipas Angin Dinding', 'Kipas Angin Plafon', 'Proyektor LCD', 'Air Conditioner', 'Rak Buku', 'Rak Sepatu', 'Majalah Dinding');

        return [
            'nama_kelas' => fake()->unique()->randomElement(['8A', '8B', '8C', '8D', '8E', '8F', '8G', '8H']),
            'deskripsi_kelas' => fake()->paragraph(),
            'tema_kelas' => fake()->sentence(2),
            'moto_kelas' => fake()->text(50),
            'fasilitas_kelas' => fake()->randomElements($fasilitas, fake()->randomDigit(), false),
            'nama_wali_kelas' => fake()->name()
        ];
    }
}
