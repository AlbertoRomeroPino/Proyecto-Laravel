<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void {
    Cliente::factory(10)->create()->each(function ($cliente) {
        Pedido::factory(3)->create([
            'cliente_id' => $cliente->id,
        ]);
    });
}
}
