<x-layouts.main>
    <x-slot:title>{{ __('Reset your password') }}</x-slot:title>
    <x-slot:section></x-slot:section>
    <x-slot:sidebar></x-slot:sidebar>

    <div class="flex flex-col items-start gap-2 text-left sm:items-center sm:text-center">
        <h1 class="text-xl font-medium">{{ __('Reset your account\'s password') }}</h1>
        <p class="text-muted-foreground text-sm text-balance">{{ __('Proceed according to the information received in the email to reset your password') }}</p>
    </div>

</x-layouts.main>
