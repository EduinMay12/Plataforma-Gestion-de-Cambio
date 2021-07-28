<?php

namespace Database\Factories\ModuloDiagnosticos;

use App\Models\ModuloDiagnosticos\Puesto;
use Illuminate\Database\Eloquent\Factories\Factory;

class PuestoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Puesto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(),
            'reporta_a' => $this->faker->word(),
            'estatus' => $this->faker->randomElement([1,2])
        ];
    }
}
