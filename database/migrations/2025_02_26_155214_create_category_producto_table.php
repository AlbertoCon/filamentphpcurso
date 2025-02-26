<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('category_producto', function (Blueprint $table) {
            $table->foreignId('cetegory_id')
                ->constrained('cetegories')
                ->cascadeOnDelete();
                $table->foreignId('producto_id')
                ->constrained('productos')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_producto');
    }
};
