<?php

namespace Database\Factories\ModuloCapacitaciones;

use App\Models\ModuloCapacitaciones\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Categoria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->word(20),
            'descripcion' => $this->faker->sentence(),
            'imagen' => 'categorias/'.$this->faker->image('public/storage/categorias', 640, 480, null, false),
            'contador' => $this->faker->randomElement([0, 3]),
            'status' => $this->faker->randomElement([true, false])
        ];
    }
}
