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
        Schema::create('user_fodmaps', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->boolean('fructose')->default(false);
            $table->boolean('lactose')->default(false);
            $table->boolean('mannitol')->default(false);
            $table->boolean('sorbitol')->default(false);
            $table->boolean('GOS')->default(false);
            $table->boolean('fructan')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_fodmaps');
    }
};
