<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Nette\Schema\Schema as SchemaSchema;

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
        Schema::create('posting_locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('station_id');
            $table->string('tag');
            $table->string('wing');
            $table->string('location');
            $table->timestamps();
        });
        Schema::create('posting', function (Blueprint $table) {
            $table->id();
            $table->foreignId('station_id');
            $table->string('tag');
            $table->string('wing');
            $table->string('location');
            $table->string('service');
            $table->date('for');
            $table->boolean('present');
            $table->foreignId('user_id');
            $table->foreignIdFor(User::class, 'serviced');
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
        Schema::dropIfExists('posting');
    }
};
