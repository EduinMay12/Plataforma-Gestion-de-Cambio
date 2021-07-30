<?php

namespace Database\Factories\ModuloCapacitaciones;

use App\Models\ModuloCapacitaciones\Grupo;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ModuloCapacitaciones\Curso;

class GrupoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Grupo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(),
            'imagen' => 'grupos/'.$this->faker->image('public/storage/grupos', 640, 480, null, false),
            'descorta' => $this->faker->sentence(),
            'fechaInicio' => $this->faker->date(),
            'fechaFin' => $this->faker->date(),
            'horarios' => $this->faker->text(1000),
            'status' => $this->faker->randomElement([true, false]),
            'curso_id' => Curso::all()->random()->id
        ];
    }
}
