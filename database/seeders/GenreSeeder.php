<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = ['Platform', 'Shooter', 'Fighting', 'Stealth', 'Survival', 'Battle Royale', 'Adventure', 'Horror', 'Puzzle', 'Action RPG', 'Strategy', 'Racing', 'Sports', 'Competitive', 'Simulator'];

        Schema::disableForeignKeyConstraints();
        Genre::truncate();
        Schema::enableForeignKeyConstraints();

        foreach($genres as $genre) {
            $new_genre = new Genre();
            $new_genre->name = $genre;
            $new_genre->save();
        }
    }
}
