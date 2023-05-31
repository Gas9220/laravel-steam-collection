<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Developer;
use App\Models\Game;
use App\Models\Platform;
use App\Models\Publisher;
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
        $platforms = Platform::all();
        $platforms = Platform::all();
        $publishers = Publisher::all();
        $developers=Developer::all();
        return view('admin.games.create', compact('publishers', 'developers','platforms'));
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
        $new_game = new Game();

        $new_game->title = $data['title'];
        $new_game->publisher_id = $data['publisher_id'];
        $new_game->publication_year = $data['publication_year'];
        $new_game->developer_id = $data['developer_id'];
        $new_game->genre = $data['genre'];
        $new_game->pegi = $data['pegi'];
        $new_game->description = $data['description'];
        $new_game->rating = $data['rating'];
        $new_game->thumbnail = $data['thumbnail'];
        $new_game->early_access = $data['early_access'];

        $new_game->save();
      
        if (isset($data['platforms'])) {
            $new_game->platforms()->sync($data['platforms']);
        }

        return redirect()->route('admin.games.show', $new_game->id);
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
  $platforms = Platform::all();
        $publishers = Publisher::all();
      $developers = Developer::all();
        $game = Game::findOrFail($id);
        return view('admin.games.edit', compact('game', 'publishers','developers','platforms'));
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

        $platforms = isset($data['platforms']) ? $data['platforms'] : [];   
        $game->platforms()->sync($platforms);

        $game->title = $data['title'];
        $game->publisher_id = $data['publisher_id'];
        $game->publication_year = $data['publication_year'];
        $game->developer_id = $data['developer_id'];
        $game->genre = $data['genre'];
        $game->pegi = $data['pegi'];
        $game->description = $data['description'];
        $game->rating = $data['rating'];
        $game->thumbnail = $data['thumbnail'];
        $game->early_access = $data['early_access'];

        $game->save();

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
