<div class="menu-block">
    @isset($patient)
        <span>{{ __('Patient details') }}</span>
        <div class="patient-info">
            <div class="info-block">
                <p>{!! __('PID: <strong>:pid</strong>', ['pid' => $patient->pid]) !!}</p>
                <p>{!! __('EID: <strong>:eid</strong>', ['eid' => $patient->eid]) !!}</p>
            </div>
            <div class="info-block">
                <p>{!! __('DOB: <strong>:dob</strong>', ['dob' => $patient->demographic->date_of_birth]) !!}</p>
                <p>{!! __('AGE: <strong>:age yrs.</strong>', ['age' => $patient->demographic->age]) !!}</p>
            </div>
            <div class="flex flex-row items-center justify-between">
                <p>{!! __('GENDER: <strong>:Gender</strong>', ['gender' => $patient->demographic->gender]) !!}</p>
            </div>
            <div class="address">
                <p>{{ __('ADDRESS:') }}</p>
                @empty($patient->demographic->address->street_name)
                    <p class="fail">{{ __(' - No patient address available - ') }}</p>
                @else
                    @php
                        $full_addr = $patient->demographic->address->street_name . ' ' . ($patient->demographic->address->street_name_extended ?? null);
                    @endphp
                    <p class="font-bold" title="{{ $full_addr }}">{{ \Str::limit($full_addr, 30) }}</p>
                    <p class="font-bold">{{ $patient->demographic->address->city }}</p>
                    <p class="font-bold">{{ $patient->demographic->address->state_name }} - {{ $patient->demographic->address->postal_code }}</p>
                    <p class="font-bold">{{ $patient->demographic->address->country_name }}</p>
                @endempty
            </div>
            <div class="info-block">
                <p>{!! __('SSN: <strong>:ssn</strong>', ['ssn' => $patient->demographic->social_security]) !!}</p>
            </div>
            <div class="info-block">
                <p>{!! __('LICENSE: <strong>:license</strong>', ['license' => $patient->demographic->license]) !!}</p>
            </div>
        </div>
    @else
        <span>{{ __('Patients') }}</span>
        <ul>
            <li>
                <x-ui.general.linkwicon :url="route('patients.list')" icon="fi-rs-member-list" :class="Request::routeIs('patients.list') ? 'active' : null">
                    {{ __('List') }}
                </x-ui.general.linkwicon>
            </li>
            <li>
                <x-ui.general.linkwicon url="/" icon="fi-rs-user-add" :class="Request::routeIs('patients.new') ? 'active' : null">
                    {{ __('New') }}
                </x-ui.general.linkwicon>
            </li>
            <li>
                <x-ui.general.linkwicon url="/" icon="fi-rs-member-search" :class="Request::routeIs('patients.search') ? 'active' : null">
                    {{ __('Search') }}
                </x-ui.general.linkwicon>
            </li>
        </ul>
</div>
@endif
@isset($last_visited)
    <div class="menu-block">
        <span>{{ __('Last visited patients') }}</span>
        <ul>
            @foreach($last_visited as $patient)
                <li>
                    <x-ui.general.linkwicon :url="route('patients.profile', ['pid' => $patient->pid])"
                                            :class="Request::fullUrlIs(route('patients.profile', ['pid' => $patient->pid])) ? 'active' : null"
                                            title="{{ $patient->demographic->full_name }}">
                        {{ \Str::limit($patient->demographic->full_name, 25) }}
                    </x-ui.general.linkwicon>
                </li>
            @endforeach
        </ul>
    </div>
@endisset
