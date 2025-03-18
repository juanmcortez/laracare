<x-layouts.main>
    <x-slot:title>{{ __('Patients List') }}</x-slot:title>
    <x-slot:subtitle>{{ __('This is the full list of patients present in the system.') }}</x-slot:subtitle>
    <x-slot:section>{{ __('Patients') }}</x-slot:section>
    <x-slot:sidebar>@include('pages.users.submenu')</x-slot:sidebar>
    @foreach($users as $user)
        {{ $user }}<br/>
    @endforeach
</x-layouts.main>
