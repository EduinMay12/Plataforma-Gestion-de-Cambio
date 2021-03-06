<?php

namespace Database\Factories\ModuloDiagnosticos;

use App\Models\ModuloDiagnosticos\Preguntas3;
use App\Models\ModuloDiagnosticos\Cuestionario3;
use Illuminate\Database\Eloquent\Factories\Factory;

class Preguntas3Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Preguntas3::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'textPregunta' => $this->faker->unique()->sentence(),
            'descripcion' => $this->faker->sentence(),
            'cuestionario_id' => Cuestionario3::all()->random()->id
        ];
    }
}
