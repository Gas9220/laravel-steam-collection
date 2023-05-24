@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="pb-4">Edit: {{$game->title}}</h1>
    <a href="{{ route('admin.games.index') }}" class="btn btn-primary btn-sm me-2 p-2">Torna indietro</a>
    <form action="{{route('admin.games.update', $game->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group pt-4">
            <label for="title">Titolo</label>
            <input type="text" value="{{old('title',$game->title)}}" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="publisher">Publisher</label>
            <input type="text" value="{{old('publisher',$game->publisher)}}" class="form-control" id="publisher" name="publisher">
        </div>
        <div class="form-group">
            <label for="publication_year">Publication year</label>
            <input type="date" value="{{old('publication_year',$game->publication_year)}}" class="form-control" id="publication_year" name="publication_year">
        </div>
        <div class="form-group">
            <label for="developers">Developers</label>
            <input type="text" value="{{old('developers',$game->developers)}}" class="form-control" id="developers" name="developers">
        </div>
        <div class="form-group">
            <label for="platforms">Platforms</label>
            <input type="text" value="{{old('platforms',$game->platforms)}}" class="form-control" id="platforms" name="platforms">
        </div>
        <div class="form-group">
            <label for="pegi">Pegi</label>
            <select class="form-select" id="tipo" name="pegi">
                <option selected>Pegi</option>
                <option value="3" {{old('pegi', $game->pegi)==3 ? 'selected' : null}}>3</option>
                <option value="7" {{old('pegi', $game->pegi)==7 ? 'selected' : null}}>7</option>
                <option value="12" {{old('pegi', $game->pegi)==12 ? 'selected' : null}}>12</option>
                <option value="16" {{old('pegi', $game->pegi)==16 ? 'selected' : null}}>16</option>
                <option value="18" {{old('pegi', $game->pegi)==18 ? 'selected' : null}}>18</option>
            </select>
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" value="{{old('genre',$game->genre)}}" class="form-control" id="genre" name="genre">
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="number" value="{{old('rating',$game->rating)}}" class="form-control" id="rating" name="rating">
        </div>
        <div class="form-group">
            <label for="thumbnail">Thumbnail</label>
            <textarea class="form-control" id="thumbnail" name="thumbnail" rows="3">{{old('thumbnail',$game->thumbnail)}}"</textarea>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{old('description',$game->description)}}"</textarea>
        </div>
        <div class="form-group pb-4">
            <label for="early_access">Early access</label>
            <select class="form-select" id="early_access" name="early_access">
                <option selected>Select an option</option>
                <option value="0" {{old('early_access', $game->early_access)==0 ? 'selected' : null}}>0</option>
                <option value="1" {{old('early_access', $game->early_access)==1 ? 'selected' : null}}>1</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection