<?php

namespace Database\Factories\ModuloDiagnosticos;

use App\Models\ModuloDiagnosticos\Preguntas2;
use App\Models\ModuloDiagnosticos\Cuestionario2;
use Illuminate\Database\Eloquent\Factories\Factory;

class Preguntas2Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Preguntas2::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'textPregunta' => $this->faker->sentence(),
            'descripcion' => $this->faker->sentence(),
            'cuestionario_id' => Cuestionario2::all()->random()->id
        ];
    }
}
