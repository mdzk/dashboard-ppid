<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengajuan>
 */
class PengajuanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name,
            'nik' => $this->faker->regexify('[0-9]{16}'),
            'alamat' => $this->faker->address(),
            'no_tlp' => $this->faker->phoneNumber(),
            'photo_ktp' => $this->faker->imageUrl(),
            'swa_photo_ktp' => $this->faker->imageUrl(),
            'pekerjaan' => $this->faker->jobTitle(),
            'informasi' => $this->faker->text('20'),
            'alasan' => $this->faker->text(30),
        ];
    }
}
