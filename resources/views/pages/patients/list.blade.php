<x-layouts.main>
    <x-slot:title>{{ __('Patients List') }}</x-slot:title>
    <x-slot:subtitle>{{ __('This is the full list of patients present in the system.') }}</x-slot:subtitle>
    <x-slot:section>{{ __('Patients') }}</x-slot:section>
    <x-slot:sidebar>@include('pages.patients.submenu')</x-slot:sidebar>
    @foreach($patients as $patient)
        <div class="flex flex-row mb-2 text-center">
            <div class="w-4/12 text-left">{{ \Str::ucfirst($patient->demographic->title) . '. ' . $patient->demographic->full_name }}</div>
            <div class="w-2/12">{{ $patient->demographic->date_of_birth }}</div>
            <div class="w-2/12">{{ \Str::ucfirst($patient->demographic->gender) }}</div>
            <div class="w-2/12">{{ $patient->pid }}</div>
            <div class="w-2/12">{{ $patient->eid }}</div>
        </div>
    @endforeach
    {{ $patients->links() }}
</x-layouts.main>
