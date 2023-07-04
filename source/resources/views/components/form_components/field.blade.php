@php
    $label = $label ?? "";
    $name =  $name ?? "";
    $value = $value ?? "";
    $placeholder = $placeholder ?? "";
    $type = $type ?? "text";
    $multiple = $multiple ?? "";
    $class = $class ?? "col-12"
@endphp
<div class="{{ $class }} form-group mb-3">
    <label for="{{ $name }}">{{ $label }}</label>
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
</div>
