<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero_pedido' => 'MNGA-' . $this->faker->unique()->numberBetween(1000, 9999),
            'fecha' => now(),
            'estado' => $this->faker->randomElement(['pendiente', 'enviado', 'entregado']),
            'total' => $this->faker->randomFloat(2, 10, 200),
            'notas' => $this->faker->sentence(),
        ];
    }
}