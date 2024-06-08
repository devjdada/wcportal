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
        Schema::create('souls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('station_id')->nullable();
            $table->foreignId('soul_winner')->nullable();
            $table->string('surname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('location')->nullable();
            $table->string('phone', 22);
            $table->string('marital', 12)->nullable();
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->longText('ocupation')->nullable();
            $table->longText('address')->nullable();
            $table->string('email', 100)->nullable();
            $table->string('bus_stop')->nullable();
            $table->boolean('born_again')->nullable();
            $table->date('born_again_on')->nullable();
            $table->longText('prayer_point')->nullable();
            $table->enum('type', ['soul', 'ft', 'nc'])->default('soul');
            $table->boolean('fc')->nullable();
            $table->boolean('wb')->nullable();
            $table->boolean('exblish')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('souls');
    }
};
