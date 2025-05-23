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
            $table->renameColumn('type', 'foreign_type');
            $table->renameColumn('target_id', 'foreign_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('original_text', function (Blueprint $table) {
            $table->renameColumn('foreign_type', 'type');
            $table->renameColumn('foreign_id', 'target_id');
        });
    }
};
