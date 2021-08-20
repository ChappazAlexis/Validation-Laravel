@extends('layouts.base')
@section('css', 'drawer')

@section('title', 'Drawer')

@section('content')
    <h1 class="title">Détail du dessinateur</h1>
    <div id="card">
        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">{{ $drawer->name }}</div>
            <div class="card-body text-dark flex">
                <p>Nationalité</p>
                <p class="card-text">{{ $drawer->nationality }}</p>
            </div>
            <div class="card-body text-dark flex">
                <p>Année de naissance :</p>
                <p class="card-text">{{ $drawer->birth_year }}</p>
        </div>
    </div>
@endsection
