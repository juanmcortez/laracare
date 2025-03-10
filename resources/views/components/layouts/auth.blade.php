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
<body class="font-sans antialiased">
<div class="relative grid h-dvh flex-col items-center justify-center px-8 sm:px-0 lg:max-w-none lg:grid-cols-2 lg:px-0">
    <div class="bg-muted relative hidden h-full flex-col p-10 text-white lg:flex dark:border-r">
        <div class="absolute inset-0 bg-zinc-900"></div>
        <a href="{{ route('main') }}" class="relative z-20 flex items-center text-lg font-medium">
            <i class="mr-2 size-8 fill-current text-white"></i>
            {{ config('app.name') }}
        </a>
    </div>
    <div class="w-full lg:p-8">
        <x-errors.main/>
        <div class="mx-auto flex w-full flex-col justify-center space-y-6 sm:w-[350px]">
            {{ $slot }}
        </div>
    </div>
</div>
</body>
</html>
