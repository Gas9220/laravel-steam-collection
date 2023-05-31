@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="text-center">I tuoi Games</h1>
        <a href="{{ route('admin.games.create') }}" class="btn btn-primary btn-sm me-2 p-2">Create</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Publisher</th>
                <th scope="col">Developers</th>
                <th scope="col">Platforms</th>
                <th scope="col">Pegi</th>
                <th scope="col">Genres</th>
                <th scope="col">Rating</th>
                <th scope="col">Early Access</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($games as $game)
            <tr>
                <th scope="row">{{ $game->title }}</th>
                <td>{{ $game->publisher }}</td>
                <td>{{ $game->developers }}</td>
                <td>{{ $game->platforms }}</td>
                <td>{{ $game->pegi }}</td>
                <td>
                    @foreach ($game->genres as $genre)
                        <span class="badge bg-warning">{{$genre->name}}</span>
                    @endforeach
                </td>
                <td>{{ $game->rating }}</td>
                <td>{{ $game->early_access == 0 ? 'no' : 'yes'}}</td>
                <td>{{ $game->description }}</td>
                <td>
                    <ul class="list-unstyled d-flex m-0 gap-1 justify-content-end">
                        <li><a href="{{ route('admin.games.show', $game->id)}}" class="btn btn-primary">Show </a></li>
                        <li><a href="{{ route('admin.games.edit', $game->id)}}" class="btn btn-success">Edit </a></li>
                    </ul>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>

</div>

@endsection