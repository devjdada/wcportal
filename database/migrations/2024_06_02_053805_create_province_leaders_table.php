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
        Schema::create('province_leaders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('station_id')->unsigned();
            $table->foreign('station_id')->references('id')->on('stations');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('province_id')->unsigned();
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->string('position')->nullable();
            $table->boolean('status')->default(true);
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->longText('about')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('province_leaders');
    }
};
