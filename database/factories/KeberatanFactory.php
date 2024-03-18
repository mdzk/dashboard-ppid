<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Keberatan>
 */
class KeberatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tujuan' => $this->faker->text(30),
            'nama' => $this->faker->name,
            'no_tlp' => $this->faker->phoneNumber(),
            'pekerjaan' => $this->faker->jobTitle(),
            'alamat' => $this->faker->address(),
            'nama_yg_dikuasakan' => $this->faker->name,
            'email_yg_dikuasakan' => $this->faker->email,
            'no_tlp_yg_dikuasakan' => $this->faker->phoneNumber(),
            'pekerjaan_yg_dikuasakan' => $this->faker->jobTitle(),
            'alamat_yg_dikuasakan' => $this->faker->address(),
            'surat_kuasa' => 'https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf',
            'alasan' => $this->faker->text(30),
        ];
    }
}
