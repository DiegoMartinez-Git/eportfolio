<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AsignacionRevision;

class AsignacionesRevisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AsignacionRevision::truncate();

        // $table->unsignedBigInteger('evidencia_id')->nullable();
        //     $table->unsignedBigInteger('revisor_id')->nullable();
        //     $table->unsignedBigInteger('asignado_por_id')->nullable();
        //     $table->date('fecha_limite');
        //     $table->enum('estado', ['pendiente', 'en_proceso', 'completado']);

        $array = [
            [
                'evidencia_id' => random_int(1, 10),
                'revisor_id' => random_int(1, 10),
                'asignado_por_id' => random_int(1, 10),
                'fecha_limite' => fake()->date(),
                'estado' => random_int(1, 2) == 1 ? 'pendiente' : 'completado',
            ],
            [
                'evidencia_id' => random_int(1, 10),
                'revisor_id' => random_int(1, 10),
                'asignado_por_id' => random_int(1, 10),
                'fecha_limite' => fake()->date(),
                'estado' => random_int(1, 2) == 1 ? 'pendiente' : 'completado',
            ],
            [
                
                'evidencia_id' => random_int(1, 10),
                'revisor_id' => random_int(1, 10),
                'asignado_por_id' => random_int(1, 10),
                'fecha_limite' => fake()->date(),
                'estado' => random_int(1, 2) == 1 ? 'pendiente' : 'completado',
            ],
            [
                
                'evidencia_id' => random_int(1, 10),
                'revisor_id' => random_int(1, 10),
                'asignado_por_id' => random_int(1, 10),
                'fecha_limite' => fake()->date(),
                'estado' => random_int(1, 2) == 1 ? 'pendiente' : 'completado',
            ],
            [
                
                'evidencia_id' => random_int(1, 10),
                'revisor_id' => random_int(1, 10),
                'asignado_por_id' => random_int(1, 10),
                'fecha_limite' => fake()->date(),
                'estado' => random_int(1, 2) == 1 ? 'pendiente' : 'completado',
            ],
            [
                
                'evidencia_id' => random_int(1, 10),
                'revisor_id' => random_int(1, 10),
                'asignado_por_id' => random_int(1, 10),
                'fecha_limite' => fake()->date(),
                'estado' => random_int(1, 2) == 1 ? 'pendiente' : 'completado',
            ],
            [
                'evidencia_id' => random_int(1, 10),
                'revisor_id' => random_int(1, 10),
                'asignado_por_id' => random_int(1, 10),
                'fecha_limite' => fake()->date(),
                'estado' => random_int(1, 2) == 1 ? 'pendiente' : 'completado',
            ],
        ];

        foreach ($array as $item) {
            AsignacionRevision::create($item);
        }
    }
}