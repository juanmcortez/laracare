<div class="menu-block">
    <span>{{ __('Users') }}</span>
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
            <x-ui.general.linkwicon url="/" icon="fi-rs-user-xmark" :class="Request::routeIs('users.search') ? 'active' : null">
                {{ __('Disabled') }}
            </x-ui.general.linkwicon>
        </li>
    </ul>
</div>
