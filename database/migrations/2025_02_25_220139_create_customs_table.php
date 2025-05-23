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
        Schema::create('customs', function (Blueprint $table) {
            $table->id();
            $table-> string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->date('date_of_birth');
            $table->string('address');
            $table->string('zip_code');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customs');
    }
};
