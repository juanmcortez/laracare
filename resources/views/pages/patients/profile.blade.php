<x-layouts.main>
    <x-slot:title>{{ __('Details for :name', ['name' => $patient->demographic->full_name]) }}</x-slot:title>
    <x-slot:subtitle>{{ __('These are the details for :name.', ['name' => $patient->demographic->full_name]) }}</x-slot:subtitle>
    <x-slot:section>{{ __('Profile details') }}</x-slot:section>
    <x-slot:sidebar>@include('pages.patients.submenu')</x-slot:sidebar>
    <div class="flex flex-row items-center justify-center">
        <div class="w-4/12 text-left">{{ \Str::ucfirst($patient->demographic->title) . '. ' . $patient->demographic->full_name }}</div>
        <div class="w-2/12">{{ $patient->demographic->date_of_birth }}</div>
        <div class="w-2/12">{{ \Str::ucfirst($patient->demographic->gender) }}</div>
        <div class="w-2/12">{{ $patient->pid }}</div>
        <div class="w-2/12">{{ $patient->eid }}</div>
    </div>
    @empty($patient->demographic->address->street_name)
        <div class="flex flex-row items-center justify-start text-light-font">{{ __('No address available') }}</div>
    @else
        <div class="flex flex-row items-center justify-center">
            <div class="w-4/12 text-left">{{ $patient->demographic->address->street_name }}</div>
            <div class="w-2/12">{{ $patient->demographic->address->street_name_extended }}</div>
            <div class="w-4/12">
                {{ $patient->demographic->address->city . ', ' . $patient->demographic->address->state . ' ' . $patient->demographic->address->postal_code }}
            </div>
            <div class="w-2/12">{{ $patient->demographic->address->country_code }}</div>
        </div>
    @endif
</x-layouts.main>
