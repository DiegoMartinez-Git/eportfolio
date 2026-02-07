<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AsignacionRevision;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AsignacionRevision>
 */

class AsignacionRevisionFactory extends Factory
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
            'revisor_id' => \App\Models\User::factory(),
            'asignado_por_id' => \App\Models\User::factory(),
            'fecha_limite' => $this->faker->date(),
            'estado' => $this->faker->randomElement(['pendiente', 'en_proceso', 'completado'])
        ];
    }
}