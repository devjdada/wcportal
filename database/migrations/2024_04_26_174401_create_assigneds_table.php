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
        Schema::create('assigneds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('station_id')->unsigned();
            $table->foreign('station_id')->references('id')->on('stations');
            $table->string('type');
            $table->bigInteger('assigned_to')->unsigned();
            $table->foreign('assigned_to')->references('id')->on('users');
            $table->bigInteger('contact_id')->unsigned();
            $table->foreign('contact_id')->references('id')->on('souls');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assigneds');
    }
};
