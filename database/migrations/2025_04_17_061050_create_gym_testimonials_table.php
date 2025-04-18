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
        Schema::create('gym_testimonials', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('occupation');
            $table->string('name');
            $table->string('photo');
            $table->text('message');

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
        Schema::dropIfExists('gym_testimonials');
    }
};
