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
        <div class="card-body row">
            @foreach($events as $event)
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100" style="max-width: 300px">
                        <div class="card-body">
                            <h4 class="card-title">{{ $event->title  }}</h4>
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="card-subtitle text-muted">
                                    {{ $event->getType() }}
                                    @if($event->type=='0')
                                        <a href="javascript:void(0);" class="card-link">Cliquer ici pour rejoindre</a>
                                    @else
                                        <a href="javascript:void(0);" class="card-link">Localiser</a>
                                    @endif
                                </h6>
                                <a href="{{ route('events.edit', $event) }}">
                                    <button class="btn btn-primary">[!</button>
                                </a>
                            </div>
                            <img
                                class="img-fluid d-flex mx-auto my-4"
                                src="{{ asset('storage/'.$event->images[0]->image_path) }}"
                                alt="{{ $event->title }}"
                                style="max-height: 200px;"
                            />
                            <h5>Description</h5>
                            <p class="card-text">{{ $event->description  }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop



