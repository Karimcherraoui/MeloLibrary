<?php

use GuzzleHttp\Psr7\DroppingStream;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('piece_musical', function (Blueprint $table) {

            $table->dropColumn('duration');
            
        });
        Schema::table('piece_musical', function (Blueprint $table) {

            
            $table->string('duration')->default('00:00');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('piece_musical', function (Blueprint $table) {
            $table->dropColumn('duration');
            $table->double('duration');
    });
    }
};
