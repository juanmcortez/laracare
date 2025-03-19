<x-layouts.main>
    <x-slot:title>{{ __('Details for :name', ['name' => $user->demographic->full_name]) }}</x-slot:title>
    <x-slot:subtitle>{{ __('These are the details for :name.', ['name' => $user->demographic->full_name]) }}</x-slot:subtitle>
    <x-slot:section>{{ __('Profile details') }}</x-slot:section>
    <x-slot:sidebar>@include('pages.users.submenu')</x-slot:sidebar>
    {{ \Str::ucfirst($user->demographic->title) . '. ' . $user->demographic->full_name }}<br/>
    {{ $user->demographic->date_of_birth }}<br/>
    {{ \Str::ucfirst($user->demographic->gender) }}<br/>
    {{ $user->demographic->social_security }}<br/>
    {{ $user->demographic->license }}<br/>
    {{ $user->username }}<br/>
    {{ $user->email }}
</x-layouts.main>
