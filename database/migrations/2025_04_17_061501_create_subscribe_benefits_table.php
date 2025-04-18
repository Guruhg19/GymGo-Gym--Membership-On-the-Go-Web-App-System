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
        Schema::create('subscribe_benefits', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');

            $table->uuid('subscribe_package_id');
            $table->foreign('subscribe_package_id')->references('id')->on('subscribe_packages')->onDelete('cascade');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscribe_benefits');
    }
};
