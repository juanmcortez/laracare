<x-layouts.main>
    <x-slot:title>{{ __('Recover your password') }}</x-slot:title>
    <x-slot:section></x-slot:section>
    <x-slot:sidebar></x-slot:sidebar>

    <div class="left-side">
        <a href="{{ route('main') }}" class="relative z-20 flex items-center justify-center lg:hidden">
            <i class="h-10 fill-current text-black sm:h-12"></i>
        </a>
    </div>
    <div class="right-side">
        <div class="holder">

            <div class="flex flex-col items-start gap-2 text-left sm:items-center sm:text-center">
                <h1 class="text-xl font-medium">{{ __('Reset your account\'s password') }}</h1>
                <p class="text-muted-foreground text-sm text-balance">{{ __('Enter your email below to reset your password') }}</p>
            </div>
        </div>

        <x-layouts.elements.footer/>
    </div>
</x-layouts.main>
