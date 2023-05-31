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
                    <th scope="col">Genre</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Early Access</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($games as $game)
                    <tr>
                        <th scope="row">{{ $game->title }}</th>
                        <td>{{ $game->publisher?->name ?: 'Publisher not present' }}</td>
                        <td>{{ $game->developer?->name ?: 'Developer not present' }}</td>
                        <td>
                            @foreach ($game->platforms as $platform)
                                <span class="badge bg-warning">{{ $platform->name }}</span>
                            @endforeach
                        </td>
                        <td>{{ $game->pegi }}</td>
                        <td>{{ $game->genre }}</td>
                        <td>{{ $game->rating }}</td>
                        <td>{{ $game->early_access == 0 ? 'no' : 'yes' }}</td>
                        <td>{{ $game->description }}</td>
                        <td>
                            <ul class="list-unstyled d-flex m-0 gap-1 justify-content-end">
                                <li><a href="{{ route('admin.games.show', $game->id) }}" class="btn btn-primary">Show </a>
                                </li>
                                <li><a href="{{ route('admin.games.edit', $game->id) }}" class="btn btn-success">Edit </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>
@endsection
