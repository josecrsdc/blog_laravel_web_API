<?php

namespace Database\Factories;

use App\Models\Comentario;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComentarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comentario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contenido' => $this->faker->text,
            'user_id' => User::inRandomOrder()->first()

        ];
    }
}
