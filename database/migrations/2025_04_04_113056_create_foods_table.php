<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type_id');
            $table->integer('level')->nullable();
            $table->integer('weight')->nullable();
            $table->boolean('fructose');
            $table->boolean('lactose');
            $table->boolean('mannitol');
            $table->boolean('sorbitol');
            $table->boolean('GOS');
            $table->boolean('fructan');
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
