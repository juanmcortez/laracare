<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @vite(['resources/css/laracare.css', 'resources/js/laracare.js'])
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex items-center lg:justify-center min-h-screen flex-col">
<div class="m-0 box-border h-screen w-screen bg-gray-200 p-0">
    <div class="sticky flex h-full space-x-4">
        <div class="h-screen w-1/12 bg-green-200 text-sm">
            Sidebar1 code
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
        <div class="w-2/12 bg-red-200 not-has-[nav]:hidden">
            Sidebar2 code
            @auth
                <nav class="flex items-center justify-end gap-4">
                    <a
                        href="{{ url('/dashboard') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                    >
                        Dashboard
                    </a>
                </nav>
            @endauth
        </div>
        <div class="w-full space-y-44 overflow-y-scroll bg-teal-200">
            <p>content</p>
            <p>content</p>
            <p>content</p>
            <p>content</p>
            <p>content</p>
            <p>content</p>
            <p>content</p>
        </div>
    </div>
</div>
</body>
</html>
