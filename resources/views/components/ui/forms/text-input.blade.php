@props([
    'name' => null,
    'type' => 'text',
    'label' => null,
    'placeholder' => null,
    'idx' => null,
    'old' => false, // old value from the submission
    'rqd' => false, // required
    'atf' => false, // autofocus
    'class' => false,
])
<div class="input-container">
    @isset($label)
        <label for="{{ $name }}" @if($class) class="{{ $class }}" @endif>
            {{ $label }}
        </label>
    @endisset
    <input type="{{ $type }}"
           id="{{ $name }}"
           name="{{ $name }}"
           autocomplete="{{ $name }}"
           placeholder="{{ $placeholder ?? $label }}"
           @if($class) class="{{ $class }}" @endif
           @if($old) value="{{ old($name) }}" @endif
           @if($rqd) required @endif
           @if($atf) autofocus @endif
           @isset($idx) tabIndex="{{ $idx }}" @endisset
    />
</div>
