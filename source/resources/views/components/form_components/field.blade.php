@php
    $tag = $tag ?? "input";
    $label = $label ?? "";
    $name =  $name ?? "";
    $value = $value ?? "";
    $placeholder = $placeholder ?? "";
    $type = $type ?? "text";
    $multiple = "";
@endphp

<div class="col-12 form-group mb-3" data-for="url">
@if($tag==="input")
<!--label for="{{ $name  }}" class="form-label">{{ $label  }}</label-->
<input
    type="{{$type}}"
    class="form-control @error($name) is-invalid @enderror"
    id="{{ $name  }}"
    name="{{ $name  }}"
    value="{{ $value  }}"
    placeholder="{{ $placeholder  }}"
    {{$multiple}}
/>
<div id="{{ $name  }}" class="form-text">
    @error($name)
        <span>{{ $message  }}</span>
    @enderror
</div>
@endif
@if($tag==="textarea")
    <div class="from-group col-12 w-50 mt-4">
        <label class="" for="{{ $name  }}">{{ $label  }}</label>
        <textarea class="form-control" name="{{ $name  }}" placeholder="{{ $placeholder  }}" rows="10">
            {{ $value  }}
        </textarea>
    </div>
@endif
</div>