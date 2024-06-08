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
        Schema::create('new_converts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('station_id')->unsigned();
            $table->foreign('station_id')->references('id')->on('stations');
            $table->foreignId('invitted_by')->nullable();
            $table->bigInteger('post_by')->unsigned();
            $table->foreign('post_by')->references('id')->on('users');
            $table->string('surname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('location')->nullable();
            $table->string('phone');
            $table->string('marital')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->longText('ocupation')->nullable();
            $table->longText('address')->nullable();
            $table->string('email')->nullable();
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
     * 'export PATH="/Applications/MAMP/bin/php/php8.2.0/bin:$PATH"' >> ~/.zshrc 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_converts');
    }
};
