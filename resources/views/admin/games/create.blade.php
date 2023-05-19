@extends('layout.app')

@section('page.main')

<div class="container">
    <h1 class="pb-4">Inserisci un nuovo videogioco</h1>
    <a href="{{ route('games.index') }}" class="btn btn-primary btn-sm me-2 p-2">Torna index</a>
    <form action="{{route('games.store')}}" method="POST">
        @csrf
        <div class="form-group pt-4">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="publisher">Publisher</label>
            <input type="text" class="form-control" id="publisher" name="publisher">
        </div>
        <div class="form-group">
            <label for="publication_year">Publication year</label>
            <input type="date" class="form-control" id="publication_year" name="publication_year">
        </div>
        <div class="form-group">
            <label for="developers">Developers</label>
            <input type="text" class="form-control" id="developers" name="developers">
        </div>
        <div class="form-group">
            <label for="platforms">Platforms</label>
            <input type="text" class="form-control" id="platforms" name="platforms">
        </div>
        <div class="form-group">
            <label for="pegi">Pegi</label>
            <select class="form-select" id="tipo" name="pegi">
                <option selected>Pegi</option>
                <option value="3">3</option>
                <option value="7">7</option>
                <option value="12">12</option>
                <option value="16">16</option>
                <option value="18">18</option>
            </select>
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre">
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="number" class="form-control" id="rating" name="rating">
        </div>
        <div class="form-group">
            <label for="thumbnail">Thumbnail</label>
            <textarea class="form-control" id="thumbnail" name="thumbnail" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="form-group pb-4">
            <label for="early_access">Early access</label>
            <select class="form-select" id="tipo" name="early_access">
                <option selected>Select an option</option>
                <option value="0">0</option>
                <option value="1">1</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection