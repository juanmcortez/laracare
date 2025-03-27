<x-layouts.main>
    <x-slot:title>{{ __('Dashboard') }}</x-slot:title>
    <x-slot:subtitle>{{ __('A visual representation of your practice status.') }}</x-slot:subtitle>
    <x-slot:section>{{ __('Dashboard') }}</x-slot:section>
    <x-slot:sidebar></x-slot:sidebar>
    <div class="flex flex-row items-start justify-between space-x-4 -m-4 mb-8">
        <div class="shadow-sm w-3/12 rounded-tl-sm">
            <div class="flex flex-row items-center justify-between p-4">
                <div class="flex flex-row items-center justify-center w-12 h-12 rounded-3xl bg-info-dark">
                    <i class="fi fi-rs-users-alt text-2xl mt-1.5 text-info"></i>
                </div>
                <div class="flex-1 flex-col pl-4">
                    <div class="text-light-font uppercase">{{ __('Total patients on the system') }}</div>
                    <div class="flex items-center justify-between text-dark-font text-4xl align-bottom">
                        {{ $review->get('total_patients') }}
                        <div class="{{ $review->get('patperc_status') ?? 'text-light-font' }} text-xs leading-3">
                            {{ __(':percent% from last month', ['percent' => $review->get('patient_percent')]) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow-sm w-3/12">
            <div class="flex flex-row items-center justify-between p-4">
                <div class="flex flex-row items-center justify-center w-12 h-12 rounded-3xl bg-danger-dark">
                    <i class="fi fi-rs-file-invoice-dollar text-2xl mt-1.5 text-danger"></i>
                </div>
                <div class="flex-1 flex-col pl-4">
                    <div class="text-light-font uppercase">{{ __('Total transactions on the system') }}</div>
                    <div class="flex items-center justify-between text-dark-font text-4xl align-bottom">
                        {{ $review->get('total_transactions') }}
                        <div class="{{ $review->get('traperc_status') ?? 'text-light-font' }} text-xs leading-3">
                            {{ __(':percent% from last month', ['percent' => $review->get('transactions_percent')]) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow-sm w-3/12">
            <div class="flex flex-row items-center justify-between p-4">
                <div class="flex flex-row items-center justify-center w-12 h-12 rounded-3xl bg-success-dark">
                    <i class="fi fi-rs-money-check-edit text-2xl mt-1.5 text-success"></i>
                </div>
                <div class="flex-1 flex-col pl-4">
                    <div class="text-light-font uppercase">{{ __('Total checks on the system') }}</div>
                    <div class="flex items-center justify-between text-dark-font text-4xl align-bottom">
                        {{ $review->get('total_checks') }}
                        <div class="{{ $review->get('cheperc_status') ?? 'text-light-font' }} text-xs leading-3">
                            {{ __(':percent% from last month', ['percent' => $review->get('checks_percent')]) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow-sm w-3/12 rounded-tr-sm">
            <div class="flex flex-row items-center justify-between p-4">
                <div class="flex flex-row items-center justify-center w-12 h-12 rounded-3xl bg-warning-dark">
                    <i class="fi fi-rs-user-injured text-2xl mt-1.5 text-warning"></i>
                </div>
                <div class="flex-1 flex-col pl-4">
                    <div class="text-light-font uppercase">{{ __('Newest patient on the system') }}</div>
                    <div class="flex items-center justify-between text-dark-font text-4xl align-bottom" title="{{ $review->get('latest_patient') }}">
                        {{ \Str::limit($review->get('latest_patient'), 15) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-row items-start justify-between space-x-4 -m-4 mb-8">
        <div class="shadow-sm w-3/12">
            <div class="flex flex-row items-center justify-between p-4">
                <div class="flex flex-row items-center justify-center w-12 h-12 rounded-3xl bg-danger-dark">
                    <i class="fi fi-rs-vote-nay text-2xl mt-1.5 text-danger"></i>
                </div>
                <div class="flex-1 flex-col pl-4">
                    <div class="text-light-font uppercase">{{ __('Total denials on the system') }}</div>
                    <div class="flex items-center justify-between text-dark-font text-4xl align-bottom">
                        {{ $review->get('total_denials') }}
                        <div class="{{ $review->get('denperc_status') ?? 'text-light-font' }} text-xs leading-3">
                            {{ __(':percent% from last month', ['percent' => $review->get('denials_percent')]) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow-sm w-3/12">
            <div class="flex flex-row items-center justify-between p-4">
                <div class="flex flex-row items-center justify-center w-12 h-12 rounded-3xl bg-info-dark">
                    <i class="fi fi-rs-equality text-2xl mt-1.5 text-info"></i>
                </div>
                <div class="flex-1 flex-col pl-4">
                    <div class="text-light-font uppercase">{{ __('Total patient balance') }}</div>
                    <div class="flex items-center justify-between text-dark-font text-4xl align-bottom">
                        {{ '$ ' . $review->get('total_patient_balance') }}
                        <div class="{{ $review->get('patbal_status') ?? 'text-light-font' }} text-xs leading-3">
                            {{ __(':percent% from last month', ['percent' => $review->get('patbal_percent')]) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow-sm w-3/12">
            <div class="flex flex-row items-center justify-between p-4">
                <div class="flex flex-row items-center justify-center w-12 h-12 rounded-3xl bg-info-dark">
                    <i class="fi fi-rs-equality text-2xl mt-1.5 text-info"></i>
                </div>
                <div class="flex-1 flex-col pl-4">
                    <div class="text-light-font uppercase">{{ __('Total insurance balance') }}</div>
                    <div class="flex items-center justify-between text-dark-font text-4xl align-bottom">
                        {{ '$ ' . $review->get('total_insurance_balance') }}
                        <div class="{{ $review->get('insbal_status') ?? 'text-light-font' }} text-xs leading-3">
                            {{ __(':percent% from last month', ['percent' => $review->get('insbal_percent')]) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow-sm w-3/12 p-4">
            <div class="flex-1 flex-col space-y-2">
                <div class="text-light-font uppercase">{{ __('Top 10 patients on the system') }}</div>
                @foreach($review->get('top_10_patients') as $patient)
                    <div class="flex items-center justify-between text-dark-font">
                        {{ $patient->demographic->full_name }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layouts.main>
