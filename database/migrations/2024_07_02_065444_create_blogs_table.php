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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->longText('content');
            $table->string('image');
            $table->string('status')->default('pending');
            $table->foreignId('station_id');
            $table->foreignId('user_id');
            $table->bigInteger('poster_id')->unsigned();
            $table->foreign('poster_id')->references('id')->on('users');
            $table->date('dated')->nullable();



            $table->bigInteger('edit_by')->unsigned()->nullable();
            $table->foreign('edit_by')->references('id')->on('users');


            $table->longText('summary');
            $table->bigInteger('views');

            $table->string('category')->nullable();
            $table->string('tags')->nullable();
            $table->date('published_date')->nullable();

            $table->boolean('published')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
