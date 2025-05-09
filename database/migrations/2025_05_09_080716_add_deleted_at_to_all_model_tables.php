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
        Schema::table('food_substitutes', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('food_types', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('foods', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('mailing_groups', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('mailings', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('recipe_areas', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('recipe_categories', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('recipe_ingredients', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('recipe_measurements', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('recipe_tags', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('recipes', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('roles', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('user_mail_data', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('food_substitutes', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('food_types', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('foods', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('mailing_groups', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('mailings', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('recipe_areas', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('recipe_categories', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('recipe_ingredients', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('recipe_measurements', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('recipe_tags', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('recipes', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('roles', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('user_mail_data', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
