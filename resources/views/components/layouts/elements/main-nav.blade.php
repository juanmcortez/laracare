<aside class="main-nav">
    <div class="logo"><i class="fi fi-rs-webhook"></i></div>
    <nav class="navigation">
        <ul>
            <li>
                <x-ui.general.linkwicon icon="fi-rs-dashboard-monitor" :url="route('main')" :title="__('Dashboard')"
                                        :class="Request::routeIs('main') ? 'active' : null"/>
            </li>
            <li>
                <x-ui.general.linkwicon icon="fi-rs-member-list" :url="route('users.list')" :title="__('User')"
                                        :class="Request::routeIs('users.*') ? 'active' : null"/>
            </li>
        </ul>
        <ul>
            <li>
                <x-ui.general.linkwicon icon="fi-rs-admin-alt" :url="route('settings')" :title="__('Settings')"
                                        :class="Request::routeIs('settings') ? 'active' : null"/>
            </li>
        </ul>
    </nav>
</aside>
