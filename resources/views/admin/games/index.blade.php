@extends('layout.app')
@section('page.main')
<h1 class="text-center">I tuoi Comics</h1>
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
          <td>{{ $game->publisher }}</td>
          <td>{{ $game->developers }}</td>
          <td>{{ $game->platforms }}</td>
          <td>{{ $game->pegi }}</td>
          <td>{{ $game->genre }}</td>
          <td>{{ $game->rating }}</td>
          <td>{{ $game->early_access }}</td>
          <td>{{ $game->description }}</td>
          <td>
            <ul class="list-unstyled d-flex m-0 gap-1 justify-content-end">
              <li><a href="{{ route('games.show', $game->id)}}" class="btn btn-primary">Show </a></li>
              <li><a href="{{ route('games.edit', $game->id)}}" class="btn btn-success">Edit </a></li>
            </ul>
          </td>
        </tr>
      </tbody>
      @endforeach
 </table>
@endsection