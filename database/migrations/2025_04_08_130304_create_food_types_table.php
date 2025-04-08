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
        Schema::create('food_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        DB::insert(
            "INSERT INTO food_types (name) VALUES
            ('Fresh fruit'),
            ('Processed fruit'),
            ('Dairy'),
            ('Plant - based dairy alternatives'),
            ('Nuts & Seeds'),
            ('Vegetarian substitutes'),
            ('Pulses & Legumes'),
            ('Sugars & Sweeteners'),
            ('Fresh Vegetables'),
            ('Processed Vegetables'),
            ('Tea'),
            ('Alcohol'),
            ('Coffee'),
            ('Drink Powders'),
            ('Cordial'),
            ('Juices'),
            ('Cereals'),
            ('Grains'),
            ('Flours');"
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_types');
    }
};
