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
        Schema::create('ordained_workers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('station_id');
            $table->foreignId('user_id');
            $table->boolean('status')->default(false);
            $table->enum('register', ['accept', 'pending', 'decline', 'cancel', 'not'])->default('not');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordained_workers');
    }
};
