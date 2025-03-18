@props([
    'name' => null,
    'type' => 'checkbox',
    'label' => null,
    'placeholder' => null,
    'idx' => null,
    'old' => false, // old value from the submission
    'rqd' => false, // required
    'atf' => false, // autofocus
    'class' => false,
])
<div class="checkbox-container">
    <input type="{{ $type }}"
           id="{{ $name }}"
           name="{{ $name }}"
           autocomplete="{{ $name }}"
           placeholder="{{ $placeholder ?? $label }}"
           @if($class) class="{{ $class }}" @endif
           @if($rqd) required @endif
           @if($atf) autofocus @endif
           @isset($idx) tabIndex="{{ $idx }}" @endisset
        @checked(old($name))
    />
    @isset($label)
        <label for="{{ $name }}" @if($class) class="{{ $class }}" @endif>
            {{ $label }}
        </label>
    @endisset
</div>
