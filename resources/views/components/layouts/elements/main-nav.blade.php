<aside class="main-nav">
    <h1 class="logo">
        <x-ui.general.linkwicon icon="fi-rs-webhook" :url="route('dashboard')" :title="config('app.name')"/>
    </h1>
    <nav class="navigation">
        <ul>
            <li>
                <x-ui.general.linkwicon icon="fi-rs-dashboard-monitor" :url="route('dashboard')" :title="__('Dashboard')"
                                        :class="Request::routeIs('dashboard') ? 'active' : null"/>
            </li>
            <li>
                <x-ui.general.linkwicon icon="fi-rs-user-injured" :url="route('patients.list')" :title="__('Patients')"
                                        :class="Request::routeIs('patients.*') ? 'active' : null"/>
            </li>
        </ul>
        <ul>
            <li>
                <x-ui.general.linkwicon icon="fi-rs-member-list" :url="route('users.list')" :title="__('Users')"
                                        :class="Request::routeIs('users.*') ? 'active' : null"/>
            </li>
            <li>
                <x-ui.general.linkwicon icon="fi-rs-admin-alt" :url="route('settings')" :title="__('Settings')"
                                        :class="Request::routeIs('settings') ? 'active' : null"/>
            </li>
        </ul>
    </nav>
</aside>
