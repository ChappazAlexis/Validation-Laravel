@extends('layouts.base')
@section('css', 'comic')

@section('title', 'Comic')

@section('content')
    <h1 class="title">Détail de la BD</h1>
    <div id="card">
        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">{{ $comic->title }}</div>
            <div class="card-body text-dark flex">
                <p>BD : :</p>
                <p class="card-text">{{ $comic->comic_title }}</p>
            </div>
            <div class="card-body text-dark flex">
                <p>Dessinateur :</p>
                <p class="card-text">{{ $comic->drawer->name }}</p>
            </div>
            <div class="card-body text-dark flex">
                <p>Année de création :</p>
                <p class="card-text">{{ $comic->creation_year }}</p>
        </div>
    </div>
@endsection
