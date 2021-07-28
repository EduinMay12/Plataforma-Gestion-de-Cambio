<?php

namespace Database\Factories\ModuloDiagnosticos;

use App\Models\ModuloDiagnosticos\Competencia;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompetenciaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Competencia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $texto = $this->faker->word(10);
        return [
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(),
            'accionCorta1_ba' => $texto,
            'accionCorta2_ba' => $texto,
            'accionCorta3_ba' => $texto,
            'accionLarga1_ba' => $texto,
            'accionLarga2_ba' => $texto,
            'accionLarga3_ba' => $texto,
            'accionCorta1_ca' => $texto,
            'accionCorta2_ca' => $texto,
            'accionCorta3_ca' => $texto,
            'accionLarga1_ca' => $texto,
            'accionLarga2_ca' => $texto,
            'accionLarga3_ca' => $texto,
            'accionCorta1_ex' => $texto,
            'accionCorta2_ex' => $texto,
            'accionCorta3_ex' => $texto,
            'accionLarga1_ex' => $texto,
            'accionLarga2_ex' => $texto,
            'accionLarga3_ex' => $texto,
            'estatus' => $this->faker->randomElement([1,2])
        ];
    }
}


