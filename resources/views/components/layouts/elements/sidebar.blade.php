@props([
    'section' => null,
    'sidebar' => null,
    'title' => config('app.name'),
])
<aside class="sidebar">
    <h1 class="app-name">{{ config('app.name') }}</h1>
    <nav class="navigation">
        <h2 class="section">{{ $section ?? $title }}</h2>
        @if($sidebar)
            <div class="submenu">{{ $sidebar }}</div>
        @endif
    </nav>
</aside>
