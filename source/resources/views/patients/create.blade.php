@extends('users.create')
@section('child_content')
<div class="from-group col-4 w-50 mt-4">
    <label class="" for="{{ $name ?? ''  }}">{{ $label ?? '' }}</label>
    <input class="form-control " type="text" name="{{ $name ?? ''  }}" value="{{ $value ?? ''  }}" placeholder="{{ $placeholder ?? '' }}">
</div>
@stop 


















