<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GenerateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'jumlah_user'=>$this->faker->name(),
            'kode_enkripsi'=>$this->faker->kodeenkripsi(),
            'masa_berlaku'=>$this->faker->masaberlaku(),
        ];
    }
}
