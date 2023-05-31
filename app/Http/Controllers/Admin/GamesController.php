<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        return view('admin.games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        return view('admin.games.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        //dd($data);
        $new_game = new Game();

        $new_game->title = $data['title'];
        $new_game->publisher = $data['publisher'];
        $new_game->publication_year = $data['publication_year'];
        $new_game->developers = $data['developers'];
        $new_game->platforms = $data['platforms'];
        $new_game->pegi = $data['pegi'];
        $new_game->description = $data['description'];
        $new_game->rating = $data['rating'];
        $new_game->thumbnail = $data['thumbnail'];
        $new_game->early_access = $data['early_access'];

        $new_game->save();

        if(isset($data['genre_id'])){
            $new_game->genres()->sync($data['genre_id']);
        }
        
        return redirect()->route('admin.games.show',$new_game->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('admin.games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genres = Genre::all();
        $game = Game::findOrFail($id);
        return view('admin.games.edit', compact('game', 'genres'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        $data = $request->all();

        $genres = isset($data['genre_id']) ? $data['genre_id'] : [];

        $game->genres()->sync($genres);

        $game->title = $data['title'];
        $game->publisher = $data['publisher'];
        $game->publication_year = $data['publication_year'];
        $game->developers = $data['developers'];
        $game->platforms = $data['platforms'];
        $game->pegi = $data['pegi'];
        $game->description = $data['description'];
        $game->rating = $data['rating'];
        $game->thumbnail = $data['thumbnail'];
        $game->early_access = $data['early_access'];

        return to_route('admin.games.show', $game->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
