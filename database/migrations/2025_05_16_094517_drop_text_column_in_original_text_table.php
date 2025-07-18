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
        Schema::table('original_text', function (Blueprint $table) {
            $table->dropUnique('text_target_type_unique');
            $table->dropColumn('text');
            $table->unique(['target_id', 'type'], 'target_type_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('original_text', function (Blueprint $table) {
            $table->longText('text');
            $table->unique(['text', 'target_id', 'type'], 'text_target_type_unique');
        });
    }
};
