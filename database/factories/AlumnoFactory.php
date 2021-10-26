<?php

namespace Database\Factories;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alumno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo' =>$this->faker->randomNumber(9, true),
            'nombre'=>$this->faker->name(),
            'correo'=>$this->faker->unique()->safeEmail(),
            'contraseña'=>$this->faker->password(6,8),
        ];
    }
}
