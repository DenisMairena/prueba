<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PrestamosFactorisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fechaSolicitud' => $this->faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
            'fechaPrestamo' => $this->faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
            'fechaDevolucion' => $this->faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            'libroId' => $this->faker->numberBetween(1, 50),
            'usuarioId' => $this->faker->numberBetween(1, 100),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
