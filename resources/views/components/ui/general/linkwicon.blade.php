@props([
    'target' => '_self',
    'title' => null,
    'icon' => false,
    'url' => '/',
])
<a href="{{ $url }}" title="{{ $title ?? $slot }}" target="{{ $target }}" {{ $attributes->merge(['class' => 'link-w-icon group']) }}>
    @if($icon)
        <i class="fi {{ $icon }}"></i>
    @endif
    {{ $slot }}
</a>
