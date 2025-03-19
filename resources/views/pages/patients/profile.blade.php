<x-layouts.main>
    <x-slot:title>{{ __('Details for :name', ['name' => $patient->demographic->full_name]) }}</x-slot:title>
    <x-slot:subtitle>{{ __('These are the details for :name.', ['name' => $patient->demographic->full_name]) }}</x-slot:subtitle>
    <x-slot:section>{{ __('Profile details') }}</x-slot:section>
    <x-slot:sidebar>@include('pages.patients.submenu')</x-slot:sidebar>
    <div class="w-4/12 text-left">{{ \Str::ucfirst($patient->demographic->title) . '. ' . $patient->demographic->full_name }}</div>
    <div class="w-2/12">{{ $patient->demographic->date_of_birth }}</div>
    <div class="w-2/12">{{ \Str::ucfirst($patient->demographic->gender) }}</div>
    <div class="w-2/12">{{ $patient->pid }}</div>
    <div class="w-2/12">{{ $patient->eid }}</div>
</x-layouts.main>
