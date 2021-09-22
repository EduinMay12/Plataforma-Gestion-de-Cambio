<?php

namespace Database\Factories\ModuloDiagnosticos;

use App\Models\ModuloDiagnosticos\RoleDiagnostico;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleDiagnosticoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RoleDiagnostico::class;

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
