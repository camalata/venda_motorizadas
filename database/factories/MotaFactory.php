<?php

namespace Database\Factories;

use App\Models\Modelo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mota>
 */
class MotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \faker\factory::create();
        $modelos = Modelo::all()->pluck('id')->toArray();

        return [
            'preco' => $faker->randomFloat(1000, 89, 10000) * 100,
            'cor' => $faker->randomElement(['preta', 'branca', 'amarela', 'vermelha', 'azul', 'verde', 'outro']),
            'descricao' => $faker->text,
            'cilindragem' => $faker->randomFloat(1000, 89, 10000) * 100,
            'capacidade' => $faker->randomFloat(1000, 89, 10000) * 100,
            'disponivel' => $faker->boolean,
            'imagem_url' => $faker->imageUrl,
            'modelo_id' => $faker->randomElement($modelos),
        ];
    }
}
