<div class="menu-block">
    <span>{{ __('Patients') }}</span>
    <ul>
        <li>
            <x-ui.general.linkwicon :url="route('users.list')" icon="fi-rs-member-list" :class="Request::routeIs('users.list') ? 'active' : null">
                {{ __('List') }}
            </x-ui.general.linkwicon>
        </li>
        <li>
            <x-ui.general.linkwicon url="/" icon="fi-rs-user-add" :class="Request::routeIs('users.new') ? 'active' : null">
                {{ __('New') }}
            </x-ui.general.linkwicon>
        </li>
        <li>
            <x-ui.general.linkwicon url="/" icon="fi-rs-member-search" :class="Request::routeIs('users.search') ? 'active' : null">
                {{ __('Search') }}
            </x-ui.general.linkwicon>
        </li>
    </ul>
</div>
<div class="menu-block">
    <span>{{ __('Account history') }}</span>
    <ul>
        @isset($users)
            @foreach($users as $user)
                <li>
                    <x-ui.general.linkwicon :url="route('users.profile', ['username' => $user->username])" icon="fi-rs-user-injured"
                                            :class="Request::fullUrlIs(route('users.profile', ['username' => $user->username])) ? 'active' : null">
                        {{ $user->username }}
                    </x-ui.general.linkwicon>
                </li>
            @endforeach
        @endisset
    </ul>
</div>
