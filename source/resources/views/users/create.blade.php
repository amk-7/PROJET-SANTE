@extends('layouts.base')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Default</h5>
                <div class="card-body">
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            @include('components.form_components.field', [ 'label' => 'Nom' ])
                        </div>
                        <div class="col-md-6">
                            @include('components.form_components.field', [ 'label' => 'Prénom' ])
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-4">
                            @include('components.form_components.field', [ 'label' => 'Contact' ])
                        </div>
                        <div class="col-md-8">
                            @include('components.form_components.field', [ 'label' => 'E-mail' ])
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            @include('components.form_components.field', [ 'label' => 'Mot de passe' ])
                        </div>
                        <div class="col-md-6">
                            @include('components.form_components.field', [ 'label' => 'Confirmer' ])
                        </div>
                    </div>
                    @yield('child_content')
                    <div class="col-2 mt-5 w-100">
                        <button class="button btn btn-primary w-100" type="submit">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
</form-->
@stop
{{--
--}}
