@php
    $tag = $tag ?? "input";
    $label = $label ?? "";
    $name =  $name ?? "";
    $value = $value ?? "";
    $placeholder = $placeholder ?? "";
@endphp
@if($tag==="input")
<div class="from-group col-12 w-50 mt-4">
    <label class="" for="{{ $name  }}">{{ $label  }}</label>
    <input class="form-control " type="text" name="{{ $name  }}" value="{{ $value  }}" placeholder="{{ $placeholder  }}">
</div>
@endif
@if($tag==="texarea")
    <div class="from-group col-12 w-50 mt-4">
        <label class="" for="{{ $name  }}">{{ $label  }}</label>
        <textarea class="form-control" name="{{ $name  }}" placeholder="{{ $placeholder  }}" rows="10">
            {{ $value  }}
        </textarea>
    </div>
@endif
