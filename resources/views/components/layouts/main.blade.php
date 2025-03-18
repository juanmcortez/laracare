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
    <link href="https://fonts.bunny.net/css?family=Montserrat:wght@0,100..900;1,100..900&display=swap" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @vite(['resources/css/laracare.css', 'resources/js/laracare.js'])
</head>
<body class="font-sans antialiased @guest authentication @endguest">

<x-notifications.toast/>

<div class="wrapper">
    @auth
        <x-layouts.elements.main-nav/>

        <x-layouts.elements.sidebar :title="$title" :section="$section" :sidebar="$sidebar ?? null"/>
    @endauth
    <main>
        @guest
            <div class="content">
                <div class="main">
                    <div class="left-side">
                        <a href="{{ route('main') }}" class="logo">
                            <i class="fi fi-rs-webhook"></i> {{ config('app.name') }}
                        </a>
                    </div>
                    <div class="right-side">
                        <div class="holder">
                            {{ $slot }}
                        </div>

                        <x-layouts.elements.footer/>
                    </div>
                </div>
            </div>
        @endguest

        @auth
            <x-layouts.elements.header/>

            <div class="content">
                <div class="main">
                    {{ $slot }}
                </div>

                <x-layouts.elements.footer/>
            </div>
        @endauth
    </main>
</div>
</body>
</html>
