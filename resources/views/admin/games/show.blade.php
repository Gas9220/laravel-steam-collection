<h1>{{ $game->title }}</h1>

<a href="{{ route('games.index') }}">Torna indietro</a>
<a href="{{ route('games.edit', $game->id) }}">Vai ad edit</a>
