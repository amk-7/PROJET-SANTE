@extends('layouts.base')
@section('content')
    <form class="form-contact contact_form" action="" method="post">
        <div class="d-flex flex-column m-auto align-items-center">
            @include('components.form_components.field', [ 'label' => 'nom' ])
            @include('components.form_components.field', [ 'label' => 'Prénom', 'tag' => 'texarea' ])
            @yield('content')
           <div class="col-12 mt-5 w-50">
               <button class="button bg-primary p-6 w-100" type="submit">Enregistrer</button>
           </div>
        </div>
    </form>
@stop
