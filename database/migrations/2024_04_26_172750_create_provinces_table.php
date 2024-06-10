<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('station_id')->unsigned();
            $table->foreign('station_id')->references('id')->on('stations');
            $table->string('title')->nullable();
            $table->string('phone')->nullable();
            $table->longText('about')->nullable();
            $table->longText('address')->nullable();
            $table->timestamps();
        });


        $data = [
            [
                "title" => "Province 1",
                "about" => "PASTOR BETHEL ORDU- 08039303097",
                "address" => "Province 1",
                "station_id" => 1
            ],
            [
                "title" => "Province 2",
                "about" => "PASTOR THANKGOD FIBIKA- 08069309739",
                "address" => "Province 2",
                "station_id" => 1
            ],
            [
                "title" => "Province 3",
                "about" => "PASTOR MUYIWA OLUFUNSHO- 08037113068",
                "address" => "Province 3",
                "station_id" => 1
            ],
            [
                "title" => "Province 4",
                "about" => "PASTOR ICHE MGBA- 08037421598",
                "address" => "Province 4",
                "station_id" => 1
            ],
            [
                "title" => "Province 5",
                "about" => "PASTOR Tonte Davies- ",
                "address" => "Province 5",
                "station_id" => 1
            ],
            [
                "title" => "Province 6",
                "about" => "PASTOR GODSDAY CHUKUSA- 08023046367",
                "address" => "Province 6",
                "station_id" => 1
            ],
            [
                "title" => "Province 7",
                "about" => "PASTOR JOHN SOBEREKON-08033014574",
                "address" => "Province 7",
                "station_id" => 1
            ],
            [
                "title" => "Province 8",
                "about" => "PASTOR CALEB AJAGBA- 08037045782",
                "address" => "Province 8",
                "station_id" => 1
            ],
            [
                "title" => "Province 9",
                "about" => "PASTOR KAYODE AMPITAN- 08033413470",
                "address" => "Province 9",
                "station_id" => 1
            ],
            [
                "title" => "Province 10",
                "about" => "PASTOR STEVE EWANSIHA- 08034649614",
                "address" => "Province 10",
                "station_id" => 1
            ],
            [
                "title" => "Province 11",
                "about" => "PASTOR OLAWALE ADENIYI -08033122641",
                "address" => "Province 11",
                "station_id" => 1
            ],
            [
                "title" => "Province 12",
                "about" => "PASTOR TAMMIE KINGMATE- 08036683655",
                "address" => "Province 12",
                "station_id" => 1
            ]
        ];
        DB::table('provinces')->insert($data);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provinces');
    }
};
