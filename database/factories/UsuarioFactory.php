<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker-> name(),
            'apellido'=>$this->faker->lastName(), 
            'correo_electronico'=>$this->faker->email(), 
            'fecha_de_registro'=>$this->faker->date(), 
        ];
    }
}
