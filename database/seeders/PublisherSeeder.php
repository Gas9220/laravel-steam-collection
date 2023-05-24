<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $publishers = ['Mojang Studios', 'Rockstar Games', 'Bethesda Game Studios', 'Epic Games', 'Blizzard Entertainment', 'Sony Computer Entertainment', 'Nintendo EAD', 'Warner Bros. Interactive Entertainment', 'Valve', 'Electronic Arts', 'Namco Bandai Games', 'Konami', 'Valve', 'Microsoft Game Studios', 'Activision', '2K', 'Nintendo'];

        Schema::disableForeignKeyConstraints();
        Publisher::truncate();
        Schema::enableForeignKeyConstraints();

        foreach ($publishers as $publisher) {
            $new_publisher = new Publisher();
            $new_publisher->name = $publisher;
            $new_publisher->save();
        }
    }
}
