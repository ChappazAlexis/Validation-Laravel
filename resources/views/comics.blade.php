@extends('layouts.base')
@section('css', 'comics')

@section('title', 'BD')

@section('content')
<h1 class="title">Liste des BD</h1>

<div class="list">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Titre de la BD</th>
                <th>Dessinateur</th>
                <th>Création</th>
                <th>MAJ</th>
                <th>Suppr</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <td><a href="comic/{{ $comics->id }}">{{ $comics->title }}</a></td>
                <td>{{$comics->comic_title}}</td>
                <td>{{ $comics->drawer->name }}</td>
                <td>{{ $comics->creation_year }}</td>
                <td>
                    @endforeach
                </td>
                <td>
                    <form action="updateComic" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $comics->id }}">
                        <input class="btn btn-info" type="submit" value="MAJ">
                    </form>
                </td>
                <td>
                    <form action="deleteComics" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $comics->id }}">
                        <input class="btn btn-danger" type="submit" value="x">
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection