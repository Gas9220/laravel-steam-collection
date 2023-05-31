<?php

namespace Database\Seeders;

use App\Models\Developer;
use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $games = config('games');

        // foreach($games as $game) {

        //     $developer = Developer::inRandomOrder()->first();
        //     $newGame = new Game();
        //     $newGame->title = $game['title'];
        //     $newGame->publication_year = $game['publication_year'];
        //     $newGame->description = $game['description'];
        //     $newGame->pegi = $game['pegi'];
        //     $newGame->rating = $game['rating'];
        //     $newGame->thumbnail = $game['thumbnail'];
        //     $newGame->early_access = $game['early_access'];
        //     $newGame->developer_id = $developer->id;
    
        //     $newGame->save();
        // }

        $games = [
            'Assassins Creed' => [
                'developer_id' => 3, //6
                'title' => 'Assassins Creed',
                'publication_year' => '2000-10-31',
                'description' => 'lorem',
                'pegi' => 18,
                'rating' => 10,
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/en/5/52/Assassin%27s_Creed.jpg',
                'early_access' => 0,
                'publisher_id' => 5, //17
                'price' => 35,
                'is_highlighted' => 0,
                'discount' => 30
            ],
            'The Last Of Us' => [
                'developer_id' => 6, //6
                'title' => 'The Last Of Us',
                'publication_year' => '2013-06-14',
                'description' => 'lorem',
                'pegi' => 18,
                'rating' => 10,
                'thumbnail' => 'https://m.media-amazon.com/images/I/71quawMF38L._AC_UF1000,1000_QL80_.jpg',
                'early_access' => 0,
                'publisher_id' => 2, //17
                'price' => 65,
                'is_highlighted' => 0,
                'discount' => 0
            ],
            'Fortnite' => [
                'developer_id' => 1, //6
                'title' => 'Fortnite',
                'publication_year' => '2017-05-16',
                'description' => 'lorem',
                'pegi' => 7,
                'rating' => 3,
                'thumbnail' => 'https://gaming-cdn.com/images/products/2500/orig-fallback-v1/fortnite-pc-gioco-epic-games-cover.jpg?v=1645021449',
                'early_access' => 0,
                'publisher_id' => 16, //17
                'price' => 0,
                'is_highlighted' => 0,
                'discount' => 0
            ],
            'Grand Theft Auto V' => [
                'developer_id' => 5, //6
                'title' => 'Grand Theft Auto V',
                'publication_year' => '2013-10-13',
                'description' => 'lorem',
                'pegi' => 18,
                'rating' => 10,
                'thumbnail' => 'https://image.api.playstation.com/vulcan/ap/rnd/202202/2811/x9SuHZAiRn0uJXB1IKteIgcw.png',
                'early_access' => 0,
                'publisher_id' => 6, //17
                'price' => 40,
                'is_highlighted' => 0,
                'discount' => 50
            ],
            'Super Mario 64' => [
                'developer_id' => 1, //6
                'title' => 'Super Mario 64',
                'publication_year' => '1996-06-14',
                'description' => 'lorem',
                'pegi' => 7,
                'rating' => 10,
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/it/3/3e/Super_Mario_64.jpg',
                'early_access' => 0,
                'publisher_id' => 11, //17
                'price' => 0,
                'is_highlighted' => 1,
                'discount' => 0
            ],
            
        ];

        Schema::disableForeignKeyConstraints();
        Game::truncate();
        Schema::enableForeignKeyConstraints();

        foreach ($games as $key => $game) {
            $new_game = new Game();
            $new_game->title = $key;
            foreach ($game as $key => $value) {
                $new_game->$key = $value;
            }
            $new_game->save();
        }

    }
}
