@extends('layouts.app')

@section('content')
    <h1>Tutoriel Laravel 9 CRUD</h1>

    <table class="table table-bordered">
        <tr>
            <th>Nom:</th>
            <td>{{ $personnage->nom }}</td>
        </tr>
        <tr>
            <th>Company:</th>
            <td>{{ $personnage->company }}</td>
        </tr>
        <tr>
            <th>détail:</th>
            <td>{{ $personnage->detail }}</td>
        </tr>
        <tr>
            <th>Fortune:</th>
            <td>$ {{ $personnage->fortune }}</td>
        </tr>

    </table>
@endsection
