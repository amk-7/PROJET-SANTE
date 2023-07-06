@extends('users.create',['route_name_prefix'=>'consultants'])
@section('child_content')
<div class="row col-md-12" >
    <!--input type="url" name="url" placeholder="Your Site" data-form-field="url" class="form-control" value="" id="url-form5-1a"-->
    @include('components.form_components.field', [ 'placeholder' => 'Licence number' ])
</div>
<div class="row col-md-12" >
    <!--input type="url" name="url" placeholder="Your Site" data-form-field="url" class="form-control" value="" id="url-form5-1a"-->
    @include('components.form_components.field', [ 'placeholder' => 'spécialité' ])
</div>

<div class="row">
    <div class="col-md-4" >
        <!--input type="url" name="url" placeholder="Your Site" data-form-field="url" class="form-control" value="" id="url-form5-1a"-->
        <label for="">Diplome</label>
        @include('components.form_components.field', [ 'placeholder' => 'diplôme' ,'type'=>'file'])
    </div>

    <div class="col-md-4 " >
        <!--input type="url" name="url" placeholder="Your Site" data-form-field="url" class="form-control" value="" id="url-form5-1a"-->
        <label for="">Attestations</label>
        @include('components.form_components.field', [ 'placeholder' => 'Attestations' ,'type'=>'file',$multiple = 'multiple'])
    </div>

    <div class="row col-md-4 " >
        <!--input type="url" name="url" placeholder="Your Site" data-form-field="url" class="form-control" value="" id="url-form5-1a"-->
        <label for="">Profile</label>
        @include('components.form_components.field', [ 'placeholder' => 'Profile' ,'type'=>'file'])
    </div>
</div>


@stop
