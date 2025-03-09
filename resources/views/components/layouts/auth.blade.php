<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ isset($title) ? config('app.name') . ' | ' . $title : config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @vite(['resources/css/laracare.css', 'resources/js/laracare.js'])
</head>
<body class="bg-[#FDFDFC] text-[#1b1b18] flex items-center lg:justify-center min-h-screen flex-col">
<x-errors.main/>
{{ $slot }}
</body>
</html>
