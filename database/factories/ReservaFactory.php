<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserva>
 */
class ReservaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'data_reserva' => $this->faker->date(),
            'status' => $this->faker->randomElement(['pendente', 'reservada', 'cancelada', 'estoque insuficiente']),
            'mota_id' => $this->faker->numberBetween(1, 10),
            'cliente_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
