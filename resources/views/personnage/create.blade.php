@extends('layouts.app')

@section('content')

    <h1>Ajouter un personnage</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ url('personnage') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrez un nom" name="nom">
        </div>
        <div class="form-group mb-3">
            <label for="company">Company:</label>
            <input type="text" class="form-control" id="company" placeholder="Company" name="company">
        </div>
        <div class="form-group mb-3">
            <label for="fortune">Fortune ($):</label>
            <input type="number" class="form-control" id="fortune" placeholder="fortune" name="fortune">
        </div>
        <div class="form-group mb-3">
            <label for="detail">Détail:</label>
            <textarea class="form-control" id="detail" name="detail" rows="10" placeholder="Détail"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enregister</button>
    </form>
@endsection
