@php
    $label = $label ?? "";
    $name =  $name ?? "";
    $selceted_value = $selceted_value ?? "";
    $placeholder = $placeholder ?? "";
    $class = $class ?? "col-12"

@endphp
<div class="{{ $class }} form-group mb-3">
    <label for="{{ $name }}">{{ $name }}</label>
    @foreach($data as $d)
    <div class="form-check mt-3">
        <input
            name="{{ $name  }}"
            class="form-check-input @error($name) is-invalid @enderror"
            type="radio"
            value="{{ $loop->index  }}"
            id="{{ $name."_".$loop->index  }}"
            @if($selceted_value==$loop->index) checked @endif
        />
        <label class="form-check-label" for="{{ $name  }}"> {{ $d }} </label>
      </div>
    @endforeach
    <div id="{{ $name  }}" class="form-text">
        @error($name)
            <span>{{ $message  }}</span>
        @enderror
    </div>
</div>
