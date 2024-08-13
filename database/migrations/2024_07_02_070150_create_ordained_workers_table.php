<?php

use App\Models\OrdainedWorker;
use App\Models\User;
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
            $table->foreignId('user_id')->nullable();
            $table->string('type');
            $table->string('name');
            $table->string('phone');
            $table->date('ordain_date')->nullable();
            $table->string('ordain_where')->nullable();
            $table->string('wing')->nullable();
            $table->boolean('status')->default(false);
            $table->enum('register', ['accept', 'pending', 'decline', 'cancel', 'not'])->default('not');
            $table->timestamps();
        });
        Schema::create('posting_locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('station_id');
            $table->string('tag');
            $table->string('wing');
            $table->string('location');
            $table->timestamps();
        });
        Schema::create('ow_postings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('station_id');
            $table->string('tag');
            $table->string('wing');
            $table->string('location');
            $table->string('service');
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->date('for');
            $table->boolean('available')->default(false);
            $table->foreignId('user_id')->nullable();
            $table->foreignIdFor(User::class, 'serviced_id')->nullable();
            $table->foreignIdFor(OrdainedWorker::class, 'ordained_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordained_workers');
        Schema::dropIfExists('posting_locations');
        Schema::dropIfExists('ow_postings');
    }
};
