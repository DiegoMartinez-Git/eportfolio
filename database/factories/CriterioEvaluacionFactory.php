<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AsignacionRevision;
use App\Models\ResultadoAprendizaje;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CriterioEvaluacion>
 */

class CriterioEvaluacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'resultado_aprendizaje_id' => ResultadoAprendizaje::factory(),
            'codigo' => $this->faker->word(),
            'descripcion' => $this->faker->text(),
            'peso_porcentaje' => $this->faker->numberBetween(1, 100),
            'orden' => $this->faker->numberBetween(1, 10)
            
        ];
    }
}