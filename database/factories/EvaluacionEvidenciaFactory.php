<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EvaluacionEvidencia;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluacionEvidencia>
 */
class EvaluacionEvidenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'evidencia_id' => \App\Models\Evidencia::factory(),
            'user_id' => \App\Models\User::factory(),
            'puntuacion' => fake()->numberBetween(0, 10),
            'estado' => fake()->randomElement(['pendiente', 'aprobado', 'suspenso']),
            'observaciones' => fake()->text(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
