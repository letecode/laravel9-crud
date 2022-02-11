
@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h1>Tutoriel Laravel 9 CRUD</h1>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ url('personnage/create') }}">Ajouter</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nom</th>
            <th>Détail</th>
            <th>Company</th>
            <th>fortune</th>
            <th>Actions</th>
        </tr>

        @foreach ($personnages as $index => $personnage)
            <tr>
                <td>{{ $index }}</td>
                <td>{{ $personnage->nom }}</td>
                <td>{{ $personnage->detail }}</td>
                <td>{{ $personnage->company }}</td>
                <td>{{ $personnage->fortune }}</td>
                <td>
                    <form action="{{ url('personnage/'. $personnage->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-info" href="{{ url('personnage/'. $personnage->id) }}">Voir</a>
                        <a class="btn btn-primary" href="{{ url('personnage/'. $personnage->id .'/edit') }}">Modifier</a>


                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
