<?php

namespace Database\Factories\ModuloDiagnosticos;

use App\Models\ModuloDiagnosticos\Preguntas1;
use App\Models\ModuloDiagnosticos\Cuestionario1;
use Illuminate\Database\Eloquent\Factories\Factory;

class Preguntas1Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Preguntas1::class;

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
            'cuestionario_id' => Cuestionario1::all()->random()->id
        ];
    }
}
