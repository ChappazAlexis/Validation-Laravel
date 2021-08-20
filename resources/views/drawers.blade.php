@extends('layouts.base')
@section('css', 'drawers')

@section('title', 'BD')

@section('content')
<h1 class="title">Liste des dessinateur</h1>

<div class="list">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Date de naissance</th>
                <th>Nationalité</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drawers as $drawer)
            <tr>
                <td><a href="drawer/{{ $drawers->id }}">{{ $drawers->title }}</a></td>
                <td>{{$drawers->drawer_title}}</td>
                <td>{{ $drawers->drawer->name }}</td>
                <td>{{ $drawers->birth_year }}</td>
                <td>
                    @endforeach
                </td>
                <td>
                    <form action="updateDrawer" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $drawers->id }}">
                        <input class="btn btn-info" type="submit" value="MAJ">
                    </form>
                </td>
                <td>
                    <form action="deleteDrawers" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $drawers->id }}">
                        <input class="btn btn-danger" type="submit" value="x">
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection