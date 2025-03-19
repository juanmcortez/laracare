<x-layouts.main>
    <x-slot:title>{{ __('Patients List') }}</x-slot:title>
    <x-slot:subtitle>{{ __('This is the full list of patients present in the system.') }}</x-slot:subtitle>
    <x-slot:section>{{ __('Patients') }}</x-slot:section>
    <x-slot:sidebar>@include('pages.users.submenu')</x-slot:sidebar>
    @foreach($users as $user)
        <div class="flex flex-row mb-2 text-center">
            <div class="w-3/12 text-left">{{ \Str::ucfirst($user->demographic->title) . '. ' . $user->demographic->full_name }}</div>
            <div class="w-2/12">{{ $user->demographic->date_of_birth }}</div>
            <div class="w-2/12">{{ \Str::ucfirst($user->demographic->gender) }}</div>
            <div class="w-2/12">{{ $user->username }}</div>
            <div class="w-3/12 flex flex-row items-center justify-start leading-3">
                <i class="fi fi-rs-envelope mr-1.5"></i> {{ $user->email }}
            </div>
        </div>
    @endforeach
</x-layouts.main>
