<x-layouts.main>
    <x-slot:title>{{ __('Your profile details :Name', ['name' => Auth::user()->username]) }}</x-slot:title>
    {{-- <x-slot:sidebar></x-slot:sidebar> --}}
    {{ $user }}
</x-layouts.main>
