<x-layouts.main>
    <x-slot:title>{{ __('Log in') }}</x-slot:title>
    <x-slot:section></x-slot:section>
    <x-slot:sidebar></x-slot:sidebar>

    <div class="w-2/4 px-10 mx-auto">

        <x-ui.forms.title formtitle="Log in to your account" formsubtitle="Enter your username and password below to log in"/>

        <x-ui.forms.holder :url="route('login')" class="auth-form">

            <x-ui.forms.text-input :label="__('Username')" name="username" old rqd atf idx="1"/>

            <x-ui.forms.text-input :label="__('Password')" type="password" name="password" autocomplete="current-password" rqd idx="2"/>

            <x-ui.forms.checkbox :label="__('Remember me')" name="remember" idx="3"/>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="ml-auto text-sm text-neutral-500" tabIndex="5">{{ __("Forgot password?") }}</a>
            @endif

            <button type="submit" tabIndex="4">{{ __("Log in") }}</button>

            <p class="text-sm text-neutral-500">
                {{ __("Don't have an account? ") }}
                <a href="{{ route('register') }}" tabIndex="5">{{ __("Sign up") }}</a>
            </p>

        </x-ui.forms.holder>

    </div>
</x-layouts.main>
