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
        Schema::create('rest_place_counries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name')->unique();

            $table->foreignId('rest_place_country_id')->constrained('rest_places');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rest_place_counries');
    }
};
