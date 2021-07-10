<?php

namespace Database\Factories\ModuloCapacitaciones;

use App\Models\ModuloCapacitaciones\Instructore;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class InstructoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Instructore::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'resena' => $this->faker->text(2000),
            'status' => $this->faker->randomElement([true, false]),
            'user_id' => $this->faker->unique()->numberBetween(1, User::count()),
        ];
    }
}
