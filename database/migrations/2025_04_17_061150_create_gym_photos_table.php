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
        Schema::create('gym_photos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('photo');
            
            $table->uuid('gym_id');
            $table->foreign('gym_id')->references('id')->on('gyms')->onDelete('cascade');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gym_photos');
    }
};
