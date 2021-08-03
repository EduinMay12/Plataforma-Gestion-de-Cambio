<?php

namespace Database\Factories\ModuloDiagnosticos;

use App\Models\ModuloDiagnosticos\Respuestas1;
use App\Models\ModuloDiagnosticos\Preguntas1;
use Illuminate\Database\Eloquent\Factories\Factory;

class Respuestas1Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Respuestas1::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'textRespuesta' => $this->faker->sentence(),
            'pregunta_id' => Preguntas1::all()->random()->id
        ];
    }
}
