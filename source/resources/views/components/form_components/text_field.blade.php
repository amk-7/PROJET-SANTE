@php
    $label = $label ?? "";
    $name =  $name ?? "";
    $value = $value ?? "";
    $placeholder = $placeholder ?? "";
    $type = $type ?? "text";
@endphp
<div class="col-12 form-group mb-3">
    <label for="{{ $name }}">{{ $label }}</label>
    <textarea name="{{ $name  }}" id="" cols="30" rows="5" class="form-control @error($name) is-invalid @enderror"
     placeholder=" {{ $placeholder  }}"></textarea>
    <div id="{{ $name  }}" class="form-text">
        @error($name)
            <span>{{ $message  }}</span>
        @enderror
    </div>
</div>
