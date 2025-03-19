<div class="menu-block">
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
<div class="menu-block">
    <span>{{ __('Last visited') }}</span>
    <ul>
        @isset($last_visited)
            @foreach($last_visited as $patient)
                <li>
                    <x-ui.general.linkwicon :url="route('patients.profile', ['pid' => $patient->pid])"
                                            :class="Request::fullUrlIs(route('patients.profile', ['pid' => $patient->pid])) ? 'active' : null">
                        {{ $patient->demographic->full_name }}
                    </x-ui.general.linkwicon>
                </li>
            @endforeach
        @endisset
    </ul>
</div>
