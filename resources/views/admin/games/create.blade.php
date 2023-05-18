@extends('layout.app')

<div class="container">
    <h1>Inserisci un nuovo videogioco</h1>
</div>

@section('page.main')

    <div class="container">
        <a href="{{route('games.index')}}">Torna index</a>
    </div>

    <div class="container">
        <form action="{{route('games.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="publisher">publisher</label>
                <input type="text" class="form-control" id="publisher" name="publisher">
            </div>
            <div class="form-group">
                <label for="publication_year">publication_year</label>
                <input type="date" class="form-control" id="publication_year" name="publication_year">
            </div>
            <div class="form-group">
                <label for="developers">developers</label>
                <input type="text" class="form-control" id="developers" name="developers">
            </div>
            <div class="form-group">
                <label for="platforms">platforms</label>
                <input type="text" class="form-control" id="platforms" name="platforms">
            </div>
            <div class="form-group">
                <label for="pegi">pegi</label>
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
                <label for="genre">genre</label>
                <input type="text" class="form-control" id="genre" name="genre">
            </div>
            <div class="form-group">
                <label for="rating">rating</label>
                <input type="number" class="form-control" id="rating" name="rating">
            </div>
            <div class="form-group">
                <label for="thumbnail">thumbnail</label>
                <textarea class="form-control" id="thumbnail" name="thumbnail" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="description">description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="early_access">early_access</label>
                <select class="form-select" id="tipo" name="early_access">
                    <option selected>early_access</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection