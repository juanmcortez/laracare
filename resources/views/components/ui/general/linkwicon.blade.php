@props([
    'target' => '_self',
    'title' => null,
    'icon' => 'fi-rs-dashboard-monitor',
    'url' => '/',
])
<a href="{{ $url }}" title="{{ $title ?? $slot }}" target="{{ $target }}" {{ $attributes->merge(['class' => 'link-w-icon group']) }}>
    <i class="fi {{ $icon }}"></i>
    {{ $slot }}
</a>
