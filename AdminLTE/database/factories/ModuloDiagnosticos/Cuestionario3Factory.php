<?php

namespace Database\Factories\ModuloDiagnosticos;

use App\Models\ModuloDiagnosticos\Cuestionario3;
use Illuminate\Database\Eloquent\Factories\Factory;

class Cuestionario3Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cuestionario3::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->word(),
            'descripcion' => $this->faker->sentence(),
            'estatus' => $this->faker->randomElement([1,2])
        ];
    }
}
