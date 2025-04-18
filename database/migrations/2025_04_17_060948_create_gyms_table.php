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
        Schema::create('gyms', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('name');
            $table->string('slug');
            $table->string('thumbnail');
            $table->text('address');
            $table->text('about');
            $table->boolean('is_popular')->default(false);
            $table->time('open_time_at');
            $table->time('closed_time_at');

            $table->uuid('city_id');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gyms');
    }
};
