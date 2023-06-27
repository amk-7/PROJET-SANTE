@extends('layouts.base_dashbord')
@section('content')
    <!-- Formulaire de création de réunion -->
    <form method="POST" action="{{ route('meet.store') }}">
        @csrf

        <div>
            <label for="summary">Titre :</label>
            <input type="text" id="summary" name="summary" required>
        </div>

        <div>
            <label for="description">Description :</label>
            <textarea id="description" name="description" required></textarea>
        </div>

        <div>
            <button type="submit">Créer la réunion</button>
        </div>
    </form>

@endsection
