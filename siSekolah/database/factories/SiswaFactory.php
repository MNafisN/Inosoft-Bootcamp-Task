<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    protected $model = \App\Models\Siswa::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_siswa' => fake()->name(),
            'kelas' => fake()->randomElement(['8A', '8B', '8C', '8D', '8E', '8F', '8G', '8H',]),
            'nomor_induk_siswa' => fake()->numberBetween(100000000, 999999999),
            'tempat_lahir' => fake()->sentence(fake()->numberBetween(1, 3)),
            'tanggal_lahir' => fake()->date('Y-m-d H:i:s'),
            'jenis_kelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'alamat_siswa' => fake()->text(30),
            'agama_siswa' => fake()->randomElement(['Islam', 'Kristen Protestan', 'Kristen Katolik', 'Hindu', 'Budha']),
            'rapor_mata_pelajaran' => [
                [
                    'nama_mapel' => 'Matematika',
                    'jenis_kurikulum' => 'K13',
                    'detail_nilai' => [
                        'latihan_soal_1' => fake()->randomFloat(1, 40, 100),
                        'latihan_soal_2' => fake()->randomFloat(1, 40, 100),
                        'latihan_soal_3' => fake()->randomFloat(1, 40, 100),
                        'latihan_soal_4' => fake()->randomFloat(1, 40, 100),
                        'ulangan_harian_1' => fake()->randomFloat(1, 40, 100),
                        'ulangan_harian_2' => fake()->randomFloat(1, 40, 100),
                        'ulangan_tengah_semester' => fake()->randomFloat(1, 40, 100),
                        'ulangan_akhir_semester' => fake()->randomFloat(1, 40, 100)
                    ]
                ],
                [
                    'nama_mapel' => 'Bahasa Indonesia',
                    'jenis_kurikulum' => 'K13',
                    'detail_nilai' => [
                        'latihan_soal_1' => fake()->randomFloat(1, 40, 100),
                        'latihan_soal_2' => fake()->randomFloat(1, 40, 100),
                        'latihan_soal_3' => fake()->randomFloat(1, 40, 100),
                        'latihan_soal_4' => fake()->randomFloat(1, 40, 100),
                        'ulangan_harian_1' => fake()->randomFloat(1, 40, 100),
                        'ulangan_harian_2' => fake()->randomFloat(1, 40, 100),
                        'ulangan_tengah_semester' => fake()->randomFloat(1, 40, 100),
                        'ulangan_akhir_semester' => fake()->randomFloat(1, 40, 100)
                    ]
                ],
                [
                    'nama_mapel' => 'Bahasa Inggris',
                    'jenis_kurikulum' => 'K13',
                    'detail_nilai' => [
                        'latihan_soal_1' => fake()->randomFloat(1, 40, 100),
                        'latihan_soal_2' => fake()->randomFloat(1, 40, 100),
                        'latihan_soal_3' => fake()->randomFloat(1, 40, 100),
                        'latihan_soal_4' => fake()->randomFloat(1, 40, 100),
                        'ulangan_harian_1' => fake()->randomFloat(1, 40, 100),
                        'ulangan_harian_2' => fake()->randomFloat(1, 40, 100),
                        'ulangan_tengah_semester' => fake()->randomFloat(1, 40, 100),
                        'ulangan_akhir_semester' => fake()->randomFloat(1, 40, 100)
                    ]
                ],
                [
                    'nama_mapel' => 'IPA',
                    'jenis_kurikulum' => 'K13',
                    'detail_nilai' => [
                        'latihan_soal_1' => fake()->randomFloat(1, 40, 100),
                        'latihan_soal_2' => fake()->randomFloat(1, 40, 100),
                        'latihan_soal_3' => fake()->randomFloat(1, 40, 100),
                        'latihan_soal_4' => fake()->randomFloat(1, 40, 100),
                        'ulangan_harian_1' => fake()->randomFloat(1, 40, 100),
                        'ulangan_harian_2' => fake()->randomFloat(1, 40, 100),
                        'ulangan_tengah_semester' => fake()->randomFloat(1, 40, 100),
                        'ulangan_akhir_semester' => fake()->randomFloat(1, 40, 100)
                    ]
                ],
                [
                    'nama_mapel' => 'IPS',
                    'jenis_kurikulum' => 'K13',
                    'detail_nilai' => [
                        'latihan_soal_1' => fake()->randomFloat(1, 40, 100),
                        'latihan_soal_2' => fake()->randomFloat(1, 40, 100),
                        'latihan_soal_3' => fake()->randomFloat(1, 40, 100),
                        'latihan_soal_4' => fake()->randomFloat(1, 40, 100),
                        'ulangan_harian_1' => fake()->randomFloat(1, 40, 100),
                        'ulangan_harian_2' => fake()->randomFloat(1, 40, 100),
                        'ulangan_tengah_semester' => fake()->randomFloat(1, 40, 100),
                        'ulangan_akhir_semester' => fake()->randomFloat(1, 40, 100)
                    ]
                ]
            ]
        ];
    }
}
