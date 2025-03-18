<x-layouts.main>
    <x-slot:title>{{ __('Users List') }}</x-slot:title>
    <x-slot:section>{{ __('Users List') }}</x-slot:section>
    <x-slot:sidebar>@include('pages.users.submenu')</x-slot:sidebar>
    @foreach($users as $user)
        {{ $user }}<br/>
    @endforeach
</x-layouts.main>
