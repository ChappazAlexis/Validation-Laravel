@extends('layouts.base')
@section('css', 'addComic')

@section('title', 'Ajouter')

@section('content')
    <h1 class="title">Ajouter une BD</h1>
    <div>
        <form action="addComic" method="POST">
            @csrf
            <div class="form-group row">
                <label for="title" class="col-sm-4 col-form-label">Titre</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="title" placeholder="Titre" value="Titre">
                </div>
            </div>
            <div class="form-group row">
                <label for="comic_title" class="col-sm-4 col-form-label">Titre de la BD</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="comic_title" placeholder="Titre de la BD" value="Titre de la BD">
                </div>
            </div>
            <div class="form-group row">
                <label for="author" class="col-sm-4 col-form-label">Dessinateur</label>
                <div class="col-sm-8">
                    <select type="text" class="form-control" name="drawer_id">
                        @foreach ($drawers as $drawer)
                            <option value="{{ $drawer->id }}">{{ $drawer->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="creation_year" class="col-sm-4 col-form-label">Creation</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="creation_year" placeholder="Année de creation" value="1900">
                </div>
            </div>
            <div class="btn-div">
                <button type="submit" class="btn btn-light">Ajouter !</button>
            </div>
        </form>
    </div>
@endsection