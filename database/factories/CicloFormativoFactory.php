<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CicloFormativo>
 */

class CicloFormativoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'familia_profesional_id' => \App\Models\FamiliaProfesional::factory(),
            'nombre' => $this->faker->word(),
            'codigo' => $this->faker->word(),
            'grado' => $this->faker->randomElement(['basico', 'medio', 'superior']),
            'descripcion' => $this->faker->text(),
        ];
    }
}