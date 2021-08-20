@extends('layouts.base')
@section('css', 'addDrawer')

@section('title', 'Modifier')

@section('content')
    <h1 class="title">Modifier un dessinateur</h1>
    <div>
        <form action="updateOneDrawer" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $drawer->id }}">
            <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label">Nom</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="name" placeholder="Nom" value="{{ $drawer->name }}">
                </div>
            </div>  
            <div class="form-group row">
                <label for="nationality" class="col-sm-4 col-form-label">Nationalité</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="nationality" placeholder="Nation" value="{{ $drawer->nationality }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="birth_year" class="col-sm-4 col-form-label">année de naissance</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="birth_year" placeholder="Année de birth" value="{{ $drawer->birth_year }}">
                </div>
            </div>
            <div class="btn-div">
                <button type="submit" class="btn btn-light">Modifier !</button>
            </div>
        </form>
    </div>
@endsection