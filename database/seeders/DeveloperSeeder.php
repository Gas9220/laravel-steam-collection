<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $developers = ['Rockstar North', 'Mojang Studios', 'Epic Games', 'Blizzard Entertainmen', 'Valve', 'Santa Monica Studio'];

        Schema::disableForeignKeyConstraints();
        Developer::truncate();
        Schema::enableForeignKeyConstraints();

        foreach ($developers as $developer) {
            $newType = new Developer();
            $newType->name = $developer;
            $newType->save();
        }
    }
}
