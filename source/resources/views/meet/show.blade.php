@extends('layouts.base_dashbord')
@section('content')
    <!-- Affichage des détails de la réunion -->
    <h1>{{ $event->getSummary() }}</h1>

    <p>{{ $event->getDescription() }}</p>

    <p>URL de la réunion : <a href="{{ $event->getHangoutLink() }}">{{ $event->getHangoutLink() }}</a></p>

@endsection
