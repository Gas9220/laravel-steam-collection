<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index()
    {
        $games = Game::with('platforms', 'genres', 'publishers', 'developers')->get();

        return response()->json([
            'success' => true,
            'result' => $games
        ]);
    }

    public function show($id)
    {
        $games = Game::with('platforms', 'genres', 'publishers', 'developers')->find($id);

        if ($games) {
            return response()->json([
                'success' => true,
                'result' => $games
            ]);
        } else {
            return response()->json([
                'success' => false,
                'result' => null
            ], 404);
        }
    }
}
