<?php

namespace Database\Factories\ModuloCapacitaciones;

use App\Models\ModuloCapacitaciones\Leccione;
use App\Models\ModuloCapacitaciones\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeccioneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Leccione::class;

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
            'objetivo' => $this->faker->text(1000),
            'status' => $this->faker->randomElement([true, false]),
            'curso_id' => Curso::all()->random()->id
        ];
    }
}
