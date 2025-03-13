<x-layouts.main>
    <x-slot:title>{{ __('Register') }}</x-slot:title>
    <x-slot:section></x-slot:section>
    <x-slot:sidebar></x-slot:sidebar>

    <div class="flex flex-col items-start gap-2 text-left sm:items-center sm:text-center">
        <h1 class="text-xl font-medium">{{ __('Create an account') }}</h1>
        <p class="text-muted-foreground text-sm text-balance">{{ __('Enter your details below to create your account') }}</p>
    </div>

    <form action="{{ route('register') }}" method="post" class="flex flex-col gap-6">
        @csrf
        <div class="grid gap-6">
            <div class="grid gap-2">
                <Label for="username" class="text-sm text-neutral-500">{{ __("Username") }}</Label>
                <input id="username" name="username" type="text" required autoFocus tabIndex="1" autoComplete="username" value="{{ old('username') }}"
                       placeholder="{{ __("Username") }}" class="placeholder-neutral-300"/>
            </div>
            <div class="grid gap-2">
                <Label for="email" class="text-sm text-neutral-500">{{ __("Email address") }}</Label>
                <input id="email" name="email" type="email" required tabIndex="2" autoComplete="email" value="{{ old('email') }}"
                       placeholder="{{ __("email@example.com") }}" class="placeholder-neutral-300"/>
            </div>
            <div class="grid gap-2">
                <div class="flex items-center">
                    <Label for="password" class="text-sm text-neutral-500">{{ __("Password") }}</Label>
                </div>
                <input id="password" name="password" type="password" required tabIndex="3" autoComplete="new-password" value=""
                       placeholder="{{ __("Password") }}" class="placeholder-neutral-300"/>
            </div>
            <div class="grid gap-2">
                <div class="flex items-center">
                    <Label for="password_confirmation" class="text-sm text-neutral-500">{{ __("Confirm password") }}</Label>
                </div>
                <input id="password_confirmation" name="password_confirmation" type="password" required tabIndex="4" autoComplete="new-password"
                       value=""
                       placeholder="{{ __("Confirm password") }}" class="placeholder-neutral-300"/>
            </div>
            <button type="submit" class="mt-4 w-full" tabIndex="4">{{ __("Create account") }}</button>
        </div>

        <div class="text-muted-foreground text-center text-sm text-neutral-600">
            {{ __("Already have an account? ") }} <a href="{{ route('login') }}" tabIndex="5">{{ __("Log in") }}</a>
        </div>
    </form>
</x-layouts.main>
