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
        Schema::create('subscribe_transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('booking_trx_id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('proof');
            $table->unsignedBigInteger('total_amount');
            $table->unsignedBigInteger('duration');
            $table->boolean('is_paid');
            $table->date('started_at');
            $table->date('ended_at');

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
        Schema::dropIfExists('subscribe_transactions');
    }
};
