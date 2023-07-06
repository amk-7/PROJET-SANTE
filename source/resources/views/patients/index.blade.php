@extends('layouts.base_dashboard')
@section('content')
    <h4 class="fw-bold py-3 mb-4">
        Liste des patients
    </h4>
    <div class="card ">
        <div class="card-header d-flex items-center justify-content-between">
            <h5 class="">List des patients</h5>
            <a href="{{route('patients.create')}}">
                <button type="button" class="btn btn-primary">Ajouter</button>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Etat du Compte</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse($patients as $patient)
                        <tr>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> {{$patient->user->user_id}}</strong>
                            </td>
                            <td>{{$patient->user->lastname}}</td>
                            <td>
                                <!-- <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li
                                        data-bs-toggle="tooltip"
                                        data-popup="tooltip-custom"
                                        data-bs-placement="top"
                                        class="avatar avatar-xs pull-up"
                                        title="Lilian Fuller"
                                    >
                                        <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    <li
                                        data-bs-toggle="tooltip"
                                        data-popup="tooltip-custom"
                                        data-bs-placement="top"
                                        class="avatar avatar-xs pull-up"
                                        title="Sophia Wilkerson"
                                    >
                                        <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    <li
                                        data-bs-toggle="tooltip"
                                        data-popup="tooltip-custom"
                                        data-bs-placement="top"
                                        class="avatar avatar-xs pull-up"
                                        title="Christina Parker"
                                    >
                                        <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                </ul> -->
                                {{$patient->user->firstname}}
                            </td>
                            <td><span class="badge bg-label-primary me-1">{{$patient->user->contact}}</span></td>
                            <td><span class="badge bg-label-primary me-1">{{$patient->user->email}}</span></td>
                            <td><span class="badge bg-label-primary me-1">{{$patient->user->enable}}</span></td>
                            <td>
                                <div class="dropdown">
                                    <button
                                        type="button"
                                        class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"
                                    >
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                        >
                                        <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-trash me-1"></i> Delete</a
                                        >
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                            <p>Liste vide </p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop



