@props([
    'section' => null,
    'sidebar' => null,
    'title' => config('app.name'),
])
<aside class="sidebar">
    <div class="app-name">{{ config('app.name') }}</div>
    <nav class="navigation">
        <div class="section"><h3>{{ $section ?? $title }}</h3></div>
        @if($sidebar)
            <div class="submenu">{{ $sidebar }}</div>
        @endif
    </nav>
</aside>
