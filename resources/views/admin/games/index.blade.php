<h1>Sono index</h1>

{{-- @dd($games); --}}

@foreach ($games as $game) 
<h2>{{ $game->title}}</h2>
<div>
    <i class="bi bi-arrow-right-short"></i>

</div>
<a href="{{ route('games.show', $game->id)}}">Vai allo show </a>
@endforeach