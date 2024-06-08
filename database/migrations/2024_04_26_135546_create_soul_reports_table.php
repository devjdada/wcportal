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
        Schema::create('soul_reports', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('station_id')->unsigned();
            $table->foreign('station_id')->references('id')->on('stations');
            $table->bigInteger('soul_id')->unsigned();
            $table->foreign('soul_id')->references('id')->on('souls');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->longText('report')->nullable();
            $table->longText('prayer')->nullable();
            $table->boolean('homecell')->nullable();
            $table->boolean('baptised')->nullable();
            $table->boolean('unit')->nullable();
            $table->boolean('last_service')->nullable();
            $table->boolean('foundation_class')->nullable();
            $table->boolean('exblish')->nullable();
            $table->boolean('born_again')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soul_reports');
    }
};
