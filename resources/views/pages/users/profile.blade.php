<x-layouts.main>
    <x-slot:title>{{ __('Your profile details :Name', ['name' => Auth::user()->username]) }}</x-slot:title>
    <x-slot:section>{{ __('User profile') }}</x-slot:section>
    <x-slot:sidebar></x-slot:sidebar>
    {{ $user }}
</x-layouts.main>
