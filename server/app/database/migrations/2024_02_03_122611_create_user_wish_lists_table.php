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
        Schema::create('user_wish_lists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('place_rest_name');
            $table->string('travel_time');
            $table->boolean('notification_status')->default(true);

            $table->foreignId('user_wish_list_id')->constrained('users');
            $table->foreignId('rest_place_name_id')->constrained('rest_places');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_wish_lists');
    }
};
