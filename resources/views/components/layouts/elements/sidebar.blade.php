@props([
    'section' => null,
    'title' => config('app.name'),
])
<aside class="sidebar">
    <div class="app-name">{{ config('app.name') }}</div>
    <nav class="navigation">
        <ul>
            <li class="section"><h3>{{ $section ?? $title }}</h3></li>
            <li>
                <span>{{ __('Section subtitle') }}</span>
                <ul>
                    <li>EE</li>
                    <li>FF</li>
                    <li>GG</li>
                </ul>
            </li>
            <li>
                <span>{{ __('Section subtitle') }}</span>
                <ul>
                    <li>EE</li>
                    <li>FF</li>
                    <li>GG</li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>
