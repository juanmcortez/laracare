<x-layouts.main>
    <x-slot:title>{{ __('Dashboard') }}</x-slot:title>
    <x-slot:subtitle>{{ __('A visual representation of your practice status.') }}</x-slot:subtitle>
    <x-slot:section>{{ __('Dashboard') }}</x-slot:section>
    <x-slot:sidebar></x-slot:sidebar>
    <div class="flex flex-row items-start justify-between space-x-4 -m-4">
        <div class="bg-white shadow p-6 w-1/4 min-h-32 rounded-tl-sm">
            <div class="flex items-center mb-4">
                <div class="bg-blue-100 h-10 w-10 rounded-full mr-4 flex flex-row items-center justify-center">
                    <i class="fi fi-rs-users-alt text-xl mt-1.5 text-blue-600"></i>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">{{ __('Total Patients') }}</p>
                    <h3 class="text-3xl font-bold">{{ \App\Models\Patients\Patient::count() }}</h3>
                </div>
            </div>
            <div class="text-sm text-green-600">{{ __(':percent% from last month', ['percent' => '+24']) }}</div>
        </div>
        <div class="bg-white shadow p-6 w-1/4 min-h-32">&nbsp;</div>
        <div class="bg-white shadow p-6 w-1/4 min-h-32">&nbsp;</div>
        <div class="bg-white shadow p-6 w-1/4 min-h-32 rounded-tr-sm">&nbsp;</div>
    </div>
</x-layouts.main>
