<x-layouts.main>
    <x-slot:title>{{ __('Reset your password') }}</x-slot:title>
    <x-slot:section></x-slot:section>
    <x-slot:sidebar></x-slot:sidebar>

    <div class="left-side">
        <a href="{{ route('main') }}" class="relative z-20 flex items-center justify-center lg:hidden">
            <i class="h-10 fill-current text-black sm:h-12"></i>
        </a>
    </div>
    <div class="right-side">
        <div class="holder">
        </div>

        <x-layouts.elements.footer/>
    </div>
</x-layouts.main>
