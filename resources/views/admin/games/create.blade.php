@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="pb-4">Inserisci un nuovo videogioco</h1>
    <a href="{{ route('admin.games.index') }}" class="btn btn-primary btn-sm me-2 p-2">Torna index</a>
    <form action="{{route('admin.games.store')}}" method="POST">
        @csrf
        <div class="form-group pt-4">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="publisher">Publisher</label>
            <select class="form-select" id="publisher" name="publisher_id">
                <option selected>Select publisher</option>
                @foreach($publishers as $publisher)
                    <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="publication_year">Publication year</label>
            <input type="date" class="form-control" id="publication_year" name="publication_year">
        </div>
        <div class="mb-3"> <label for="developer_id" class="form-label">Select a Developer</label>
            <select class="form-select" name="developer_id" id="developer_id">
                <option value="">Select a Developer</option>
                @foreach ($developers as $developer)
                <option value="{{ $developer->id }}" {{ old('developer_id') == $developer->id ? 'selected' : '' }}>{{ $developer->name }}</option>
                @endforeach
            </select>
        </div>
            <div>
                <label for="platforms">Platforms</label>
            </div>
            @foreach ($platforms as $platform)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="platforms" name="platforms[]"
                        value="{{ $platform->id }}"
                        {{ in_array($platform->id, old('platforms', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="platforms">{{ $platform->name }}</label>
                </div>
            @endforeach
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
            <div>Genres</div>
            <div class="form-group d-flex flex-wrap">
                    @foreach ($genres as $genre)
                    <div class="ms-2 mt-2">
                        <input class="form-check-input" type="checkbox" value="{{$genre->id}}" id="genres" name="genre_id[]">
                        <label class="form-check-label" for="genres">
                            {{$genre->name}}
                        </label>
                    </div>
                    @endforeach
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
