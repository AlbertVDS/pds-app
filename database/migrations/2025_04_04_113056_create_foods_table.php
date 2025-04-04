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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('type');
            $table->integer('low');
            $table->integer('fructose_l');
            $table->integer('lactose_l');
            $table->integer('mannitol_l');
            $table->integer('sorbitol_l');
            $table->integer('gos_l');
            $table->integer('fructan_l');
            $table->integer('medium');
            $table->integer('fructose_m');
            $table->integer('lactose_m');
            $table->integer('mannitol_m');
            $table->integer('sorbitol_m');
            $table->integer('gos_m');
            $table->integer('fructan_m');
            $table->integer('high');
            $table->integer('fructose_h');
            $table->integer('lactose_h');
            $table->integer('mannitol_h');
            $table->integer('sorbitol_h');
            $table->integer('gos_h');
            $table->integer('fructan_h');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};
