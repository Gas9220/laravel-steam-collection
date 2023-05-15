<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games = config('games');

        foreach($games as $game) {
            $newGame = new Game();

            $newGame->title = $game['title'];
            $newGame->publisher = $game['publisher'];
            $newGame->publication_year = $game['publication_year'];
            $newGame->developers = $game['developers'];
            $newGame->platforms = $game['platforms'];
            $newGame->description = $game['description'];
            $newGame->pegi = $game['pegi'];
            $newGame->genre = $game['genre'];
            $newGame->rating = $game['rating'];
            $newGame->thumbnail = $game['thumbnail'];
            $newGame->early_access = $game['early_access'];
    
            $newGame->save();
        }

    }
}
