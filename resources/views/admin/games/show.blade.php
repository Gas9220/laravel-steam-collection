@extends('layouts.app')

@section('content')
    <div class="container pt-4">
        <div class="text-center">
            <a href="{{ route('admin.games.index') }}" class="btn btn-primary btn-sm me-2 p-2">Torna indietro</a>
            <h1 class="pt-2">{{ $game->title }}</h1>
        </div>
        <div class="container d-flex justify-content-center align-items-center">
            <div class="card" style="width: 40rem;">
                <img src="{{ $game->thumbnail }}" class="card-img-top" alt="img">
                <div class="card-body">
                    <h3 class="card-title">Title: {{ $game->title }}</h3>
                    <p class="card-text">Description: {{ $game->description }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Pubblisher: {{ $game->publisher }}</li>
                    <li class="list-group-item">Publication year: {{ $game->publication_year }}</li>
                    <li class="list-group-item">Developers: {{ $game->developers }}</li>
                    <li class="list-group-item">

                    </li>
                    <li class="list-group-item">Pegi: {{ $game->pegi }}</li>
                    <li class="list-group-item">Developers: {{ $game->developers }}</li>
                    <li class="list-group-item">Genre: {{ $game->genre }}</li>
                    <li class="list-group-item">Rating: {{ $game->rating }}</li>
                    <li class="list-group-item">Early access: {{ $game->early_access == 0 ? 'No' : 'Yes' }}</li>
                </ul>
                <div class="card-body">
                    <a href="{{ route('admin.games.edit', $game->id) }}" class="btn btn-primary btn-sm me-2 p-2">Vai ad
                        edit</a>
                </div>
            </div>
        </div>
  <div class="container d-flex justify-content-center align-items-center">
    <div class="card" style="width: 40rem;">
      <img src="{{ $game->thumbnail }}" class="card-img-top" alt="img">
      <div class="card-body">
        <h3 class="card-title">Title: {{ $game->title }}</h3>
        <p class="card-text">Description: {{ $game->description }}</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Publisher: {{ $game->publisher?->name ?: 'Publisher not present' }}</li>
        <li class="list-group-item">Publication year: {{ $game->publication_year }}</li>
        <li class="list-group-item">
                                Platform:
                        @foreach ($game->platforms as $platform)
                            <span class="badge bg-warning">{{ $platform->name }}</span>
                        @endforeach
        </li>
        <li class="list-group-item">Pegi: {{ $game->pegi }}</li>
        <li class="list-group-item">Developers: {{ $game->developer?->name ?: 'Developer not present' }}</li>
        <li class="list-group-item">Genre: {{ $game->genre }}</li>
        <li class="list-group-item">Rating: {{ $game->rating }}</li>
        <li class="list-group-item">Early access: {{ $game->early_access == 0 ? 'No' : 'Yes' }}</li>
      </ul>
      <div class="card-body">
        <a href="{{ route('admin.games.edit', $game->id) }}" class="btn btn-primary btn-sm me-2 p-2">Vai ad edit</a>
      </div>
    </div>
@endsection
