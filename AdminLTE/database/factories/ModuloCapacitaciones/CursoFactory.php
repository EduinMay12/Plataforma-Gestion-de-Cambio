<?php

namespace Database\Factories\ModuloCapacitaciones;

use App\Models\ModuloCapacitaciones\Curso;
use App\Models\ModuloCapacitaciones\Instructore;
use App\Models\ModuloCapacitaciones\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(),
            'imagen' => 'cursos/'.$this->faker->image('public/storage/cursos', 640, 480, null, false),
            'descorta' => $this->faker->sentence(),
            'deslarga' => $this->faker->text(1000),
            'requisitos' => $this->faker->text(2000),
            'horas' => $this->faker->randomElement([20, 30, 40]),
            'status' => $this->faker->randomElement([true, false]),
            'instructore_id' => Instructore::all()->random()->id,
            'categoria_id'=> Categoria::all()->random()->id
        ];
    }
}
