<x-layouts.main>
    <x-slot:title>{{ __('Profile details for :Name', ['name' => $user->username]) }}</x-slot:title>
    <x-slot:subtitle>{{ __('These are the details for :Name.', ['name' => $user->username]) }}</x-slot:subtitle>
    <x-slot:section>{{ __('Profile details') }}</x-slot:section>
    <x-slot:sidebar>@include('pages.users.submenu')</x-slot:sidebar>
    {{ $user }}
</x-layouts.main>
