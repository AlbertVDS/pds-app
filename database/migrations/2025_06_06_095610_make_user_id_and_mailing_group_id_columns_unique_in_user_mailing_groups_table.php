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
        Schema::table('user_mailing_groups', function (Blueprint $table) {
            $table->unique(['user_id', 'mailing_group_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_mailing_groups', function (Blueprint $table) {
            $table->dropUnique(['user_id', 'mailing_group_id']);
        });
    }
};
