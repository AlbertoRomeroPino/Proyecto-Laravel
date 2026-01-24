<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
    Schema::create('pedidos', function (Blueprint $table) {
        $table->id();
        $table->string('numero_pedido')->unique(); // Ej: MANGA-1001
        $table->date('fecha');
        $table->enum('estado', ['pendiente', 'enviado', 'entregado', 'cancelado'])->default('pendiente');
        $table->decimal('total', 8, 2);
        $table->text('notas')->nullable();
        // Relación: Un pedido pertenece a un cliente
        $table->foreignId('cliente_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
