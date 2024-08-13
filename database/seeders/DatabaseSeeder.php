<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {

        \App\Models\User::factory(500)->create();
        \App\Models\Soul::factory(9100)->create();
        \App\Models\Unit::factory(10)->create();
        \App\Models\Province::factory(15)->create();
        \App\Models\District::factory(30)->create();
        \App\Models\Assigned::factory(11000)->create();
        \App\Models\UnitMember::factory(1000)->create();
        \App\Models\SoulReport::factory(10000)->create();
        \App\Models\Firsttimer::factory(4000)->create();
        \App\Models\NewConvert::factory(400)->create();

        // \App\Models\Testimony::factory(60)->create();
        // \App\Models\Blog::factory(60)->create();
        // \App\Models\Gallery::factory(5)->create();
        // \App\Models\HomecellReport::factory(690)->create();
        \App\Models\WsfMember::factory(300)->create();
    }
}
