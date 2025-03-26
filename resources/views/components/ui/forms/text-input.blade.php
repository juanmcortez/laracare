@props([
    'name' => null,
    'type' => 'text',
    'label' => null,
    'value' => null,
    'placeholder' => null,
    'idx' => null,
    'old' => false, // old value from the submission
    'rqd' => false, // required
    'atf' => false, // autofocus
    'dis' => false, // disabled
    'rdo' => false, // readonly
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
           @if($old) value="{{ old($name) }}" @else value="{{ $value }}" @endif
           @if($rqd) required @endif
           @if($atf) autofocus @endif
           @disabled($dis)
           @readonly($rdo)
           @isset($idx) tabIndex="{{ $idx }}" @endisset
    />
</div>
