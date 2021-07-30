<?php

namespace Database\Factories\ModuloCapacitaciones;

use App\Models\ModuloCapacitaciones\Cuestionario;
use Illuminate\Database\Eloquent\Factories\Factory;

class CuestionarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cuestionario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(),
            'descripcion' => $this->faker->text(1000),
            'status' => $this->faker->randomElement([true, false])
        ];
    }
}
