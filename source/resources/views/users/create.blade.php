@extends('layouts.base')
@section('content')
@php 
    $route = route($route_name_prefix.".store") ;
@endphp
<form action="{{$route}}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header"></h5>
                <div class="card-body col-lg-8 mx-auto mbr-form">

                    <div class="row col-md-12 col-12 form-group mb-3">
                        <div class="col-md-6">
                            @include('components.form_components.field', [ 'placeholder' => 'Nom','name'=>'lastname' ])
                        </div>
                        <div class="col-md-6">
                            @include('components.form_components.field', [ 'placeholder' => 'Prénom','name'=>'firstname' ])
                        </div>
                    </div>
                    
                    <div class="row col-md-12">
                        <!--div class="col-md-4"-->
                            @include('components.form_components.field', [ 'placeholder' => 'Contact', 'name'=>'contact' ])
                        <!--/div-->
                        <!--div class="col-md-8"-->
                            @include('components.form_components.field', [ 'placeholder' => 'E-mail','type'=>'email','name'=>'email' ])
                        <!--/div-->
                    </div>
                    @yield('child_content')
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            @include('components.form_components.field', [ 'placeholder' => 'Mot de passe','type'=>'password','name'=>'password'  ])
                        </div>
                        <div class="col-md-6">
                            @include('components.form_components.field', [ 'placeholder' => 'Confirmer','type'=>'password','name'=>'password_confirmation'  ])
                        </div>
                    </div>
                    <div class="col-2 mt-5 w-100">
                        <button class="button btn btn-primary w-100" type="submit">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

 
@stop
{{--
--}}
