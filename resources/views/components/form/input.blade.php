@props(['name', 'label', 'type' => 'text', 'value' => '', 'required' => false])

<div class="col-md-6">
    <div class="form-group">
        <label for="{{ $name }}" class="form-control-label">{{ $label }}</label>
        <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ $value }}"
            {{ $required ? 'required' : '' }}
            {{ $attributes->merge(['class' => 'form-control ' . ($errors->has($name) ? 'is-invalid' : '')]) }}>
        @error($name)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
