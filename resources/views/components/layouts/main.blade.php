<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @class(['dark' => ($appearance ?? 'system') === 'dark'])>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Inline script to detect system dark mode preference and apply it immediately --}}
    <script>
        (function () {
            const appearance = '{{ $appearance ?? "system" }}';
            if (appearance === 'system') {
                const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                if (prefersDark) {
                    document.documentElement.classList.add('dark');
                }
            }
        })();
    </script>
    {{-- Inline style to set the HTML background color based on our theme in app.css --}}

    <title>{{ isset($title) ? config('app.name') . ' | ' . $title : config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @vite(['resources/css/laracare.css', 'resources/js/laracare.js'])
</head>
<body class="font-sans antialiased @guest authentication @endguest">
<div class="wrapper">
    @auth
        <x-layouts.elements.main-nav/>

        <x-layouts.elements.sidebar :title="$title" :section="$section"/>
    @endauth
    <main>
        @auth
            <x-layouts.elements.header/>
        @endauth

        <div class="content">
            <div class="main">
                {{ $slot }}
            </div>

            @auth
                <x-layouts.elements.footer/>
            @endauth
        </div>
    </main>
</div>
</body>
</html>
