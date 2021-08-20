@extends('layouts.base')
@section('css', 'addDrawer')

@section('title', 'Ajouter des dessinateurs')

@section('content')
    <h1 class="title">Ajouter un dessinateur</h1>
    <div>
        <form action="addDrawer" method="POST">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label">Nom</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="name" placeholder="Nom" value="Nom">
                </div>
            </div>
            <div class="form-group row">
                <label for="nationality" class="col-sm-4 col-form-label">Nationalité</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nationality" placeholder="Nationalité" value="Nationalité">
                </div>
            </div>
            <div class="form-group row">
                <label for="birth_year" class="col-sm-4 col-form-label">Anné de naissance</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="birth_year" placeholder="Année de naissance" value="1900">
                </div>
            </div>
            <div class="btn-div">
                <button type="submit" class="btn btn-light">Ajouter !</button>
            </div>
        </form>
    </div>
@endsection