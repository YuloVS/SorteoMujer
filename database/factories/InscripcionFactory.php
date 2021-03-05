<?php

namespace Database\Factories;

use App\Models\Inscripcion;
use Illuminate\Database\Eloquent\Factories\Factory;

class InscripcionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inscripcion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni' => $this->faker->unique()->numberBetween(10000000, 99999999),
            'nombre' => $this->faker->name,
            'apellido' => $this->faker->lastName,
            'telefono' => $this->faker->numberBetween(1000000000, 999999999999),
            'email' => $this->faker->unique()->safeEmail,
            'direccion' => $this->faker->sentence(2),
        ];
    }
}
