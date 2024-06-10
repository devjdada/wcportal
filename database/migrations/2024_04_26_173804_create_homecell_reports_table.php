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
        Schema::create('homecell_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('station_id')->nullable();
            $table->foreignId('homecell_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->integer('male');
            $table->integer('new_convert');
            $table->integer('first_timer');
            $table->integer('female');
            $table->integer('children');
            $table->integer('total');
            $table->date('week');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homecell_reports');
    }
};
