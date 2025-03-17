@props([
    'url' => null,
    'method' => 'post',
    'class' => null,
])
<form action="{{ $url }}" method="{{ $method }}" class="{{ $class }}">
    @csrf
    {{ $slot }}
</form>
