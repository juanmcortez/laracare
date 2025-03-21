@props([
    'section' => null,
    'sidebar' => null,
    'title' => config('app.name'),
])
<aside class="sidebar">
    <h1 class="app-name">{{ config('app.name') }}</h1>
    <nav class="navigation">
        <h2 class="section" title="{{ $section ?? $title }}">{{ \Str::limit($section ?? $title, 15) }}</h2>
        @if($sidebar)
            <div class="submenu">{{ $sidebar }}</div>
        @endif
    </nav>
</aside>
