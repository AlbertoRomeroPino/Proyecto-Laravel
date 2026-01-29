<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class PedidoFactory extends Factory
{
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