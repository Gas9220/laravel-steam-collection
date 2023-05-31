<?php

namespace Database\Seeders;

use App\Models\Platform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $platforms = ['PC','Xbox','Xbox 360','Xbox One','PlayStation','PlayStation 1','PlayStation 2','PlayStation 3','PlayStation 4','PlayStation 5','Nintendo Switch'];

        Schema::disableForeignKeyConstraints();
        Platform::truncate();
        Schema::enableForeignKeyConstraints();

        foreach($platforms as $platform){
            $new_platform = new Platform();
            $new_platform->name = $platform;
            $new_platform->save();
        }
    }
}
