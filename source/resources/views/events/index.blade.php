@extends('layouts.base_dashboard')
@section('content')
    <h4 class="fw-bold py-3 mb-4">
        Liste des évènements
    </h4>
    <div class="">
        <div class="card-header d-flex items-center justify-content-between">
            <h5 class="">List des évènements</h5>
            <a href="{{route('events.create')}}">
                <button type="button" class="btn btn-primary">Ajouter</button>
            </a>
        </div>
        <div class="card-body bg-danger row">
            @foreach($events as $event)
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->title  }}</h5>
                            <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                            <img
                                class="img-fluid d-flex mx-auto my-4"
                                src="../assets/img/elements/4.jpg"
                                alt="Card image cap"
                            />
                            <p class="card-text">{{ $event->description  }}</p>
                            <a href="javascript:void(0);" class="card-link">Card link</a>
                            <a href="javascript:void(0);" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop



