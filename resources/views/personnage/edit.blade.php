@extends('layouts.app')

@section('content')

    <h1>Modifier Personnage</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ url('personnage/'. $personnage->id) }}" >
        @method('PATCH')
        @csrf

        <div class="form-group mb-3">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrer Nom" name="nom" value="{{ $personnage->nom }}">
        </div>
        <div class="form-group mb-3">
            <label for="company">Company:</label>
            <input type="text" class="form-control" id="company" placeholder="Entrer Company" name="company" value="{{ $personnage->company }}">
        </div>
        <div class="form-group mb-3">
            <label for="fortune">Fortune ($):</label>
            <input type="number" class="form-control" id="fortune" placeholder="fortune" name="fortune" value="{{ $personnage->fortune }}">
        </div>
        <div class="form-group mb-3">
            <label for="detail">Détail:</label>
            <textarea class="form-control" id="detail" name="detail" rows="10" placeholder="Détail">{{ $personnage->detail }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endsection
