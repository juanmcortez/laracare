<x-layouts.main>
    <x-slot:title>{!! __(':name\'s account details', ['name' => $patient->demographic->full_name]) !!}</x-slot:title>
    <x-slot:subtitle>{{ __(':name\'s account details.', ['name' => $patient->demographic->full_name]) }}</x-slot:subtitle>
    <x-slot:section>{{ $patient->demographic->full_name }}</x-slot:section>
    <x-slot:sidebar>@include('pages.patients.submenu')</x-slot:sidebar>
    ---
</x-layouts.main>
