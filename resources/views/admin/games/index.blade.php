<h1>Sono index</h1>

{{-- @dd($games); --}}

@foreach ($games as $game) 

<a href="{{ route('games.show', $game->id)}}">Vai allo show </a>
@endforeach