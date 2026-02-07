<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Evidencia;

class EvidenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'estudiante_id' => \App\Models\User::factory(),
            'tarea_id' => \App\Models\Tarea::factory(),
            'url' => fake()->url(),
            'descripcion' => fake()->text(),
            'estado_validacion' => fake()->randomElement(['pendiente', 'validada', 'rechazada']),
        ];
    }
}