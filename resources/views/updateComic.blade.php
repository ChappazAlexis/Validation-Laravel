@extends('layouts.base')
@section('css', 'addComic')

@section('title', 'Modifier')

@section('content')
    <h1 class="title">Modifier une BD</h1>
    <div>
        <form action="updateOneComic" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $comic->id }}">
            <div class="form-group row">
                <label for="title" class="col-sm-4 col-form-label">Titre</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="title" placeholder="Titre" value="{{ $comic->title }}">
                </div>
            </div>  
            <div class="form-group row">
                <label for="title" class="col-sm-4 col-form-label">Titre de la BD</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="title" placeholder="Titre de la BD" value="{{ $comic->comic_title }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="drawer" class="col-sm-4 col-form-label">Dessinateur</label>
                <div class="col-sm-8">
                    <select type="text" class="form-control" name="drawer_id">
                        @foreach ($drawers as $drawer)
                            @if ($comic->drawer_id === $drawer->id)
                                <option value="{{ $drawer->id }}" selected>{{ $drawer->name }}</option>
                            @else
                                <option value="{{ $drawer->id }}">{{ $drawer->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="creation_year" class="col-sm-4 col-form-label">Création</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="creation_year" placeholder="Année de creation" value="{{ $comic->creation_year }}">
                </div>
            </div>
            <div class="btn-div">
                <button type="submit" class="btn btn-light">Modifier !</button>
            </div>
        </form>
    </div>
@endsection