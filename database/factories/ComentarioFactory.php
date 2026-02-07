<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comentario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class ComentarioFactory extends Factory
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
            'contenido' => fake()->text(),
            'tipo' => fake()->randomElement(['publico', 'privado']),
        ];
    }
}