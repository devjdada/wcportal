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
        Schema::create('anouncements', function (Blueprint $table) {
            $table->id();
            $table->longText('text');
            $table->longText('title')->nullable();
            $table->boolean('status')->default(true);
            $table->string('fileDoc')->nullable();
            $table->string('fileType')->nullable();
            $table->string('fileName')->nullable();
            $table->string('image')->nullable();
            $table->string('orientation')->nullable();
            $table->foreignId('station_id');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anouncements');
    }
};
