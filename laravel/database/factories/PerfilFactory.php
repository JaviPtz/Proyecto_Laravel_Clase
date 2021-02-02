<?php

namespace Database\Factories;

use App\Models\Perfil;
use Illuminate\Database\Eloquent\Factories\Factory;

class PerfilFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Perfil::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //llene aleatoriamente las tablas que contenga el campo name
            'nombre'=>$this->$faker->name,
            /* 'user_id'=>$this->$faker->user_id */

        ];
    }
}
