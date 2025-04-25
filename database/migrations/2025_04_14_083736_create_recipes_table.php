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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->integer('tmdb_id');
            $table->string('name');
            $table->integer('category_id');
            $table->integer('area_id');
            $table->longText('instructions');
            $table->string('thumbnail_url');
            $table->json('tags');
            $table->string('youtube_url');
            $table->json('ingredients');
            $table->json('measurements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
