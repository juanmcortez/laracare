<x-layouts.main>
    <x-slot:title>{{ __('Log in') }}</x-slot:title>
    <x-slot:section></x-slot:section>
    <x-slot:sidebar></x-slot:sidebar>

    <div class="left-side">
        <a href="{{ route('main') }}" class="relative z-20 flex items-center justify-center lg:hidden">
            <i class="h-10 fill-current text-black sm:h-12"></i>
        </a>
    </div>
    <div class="right-side">
        <div class="holder">
            <x-errors.main/>

            <div class="flex flex-col items-start gap-2 text-left sm:items-center sm:text-center">
                <h1 class="text-xl font-medium">{{ __('Log in to your account') }}</h1>
                <p class="text-muted-foreground text-sm text-balance">{{ __('Enter your username and password below to log in') }}</p>
            </div>

            <form action="{{ route('login') }}" method="post" class="flex flex-col gap-6">
                @csrf
                <div class="grid gap-6">
                    <div class="grid gap-2">
                        <label for="username" class="text-sm text-neutral-500">{{ __("Username") }}</label>
                        <input id="username" name="username" type="text" required autoFocus tabIndex="1" autoComplete="username" value="{{ old('username') }}"
                               placeholder="{{ __("Username") }}" class="placeholder-neutral-300"/>
                    </div>
                    <div class="grid gap-2">
                        <div class="flex items-center">
                            <label for="password" class="text-sm text-neutral-500">{{ __("Password") }}</label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="ml-auto text-sm text-neutral-500" tabIndex="5">{{ __("Forgot password?") }}</a>
                            @endif
                        </div>
                        <input id="password" name="password" type="password" required tabIndex="2" autoComplete="current-password" value=""
                               placeholder="{{ __("Password") }}" class="placeholder-neutral-300"/>
                    </div>
                    <div class="flex items-center space-x-3">
                        <input type="checkbox" id="remember" name="remember" checked="{{ old('remember') }}" tabIndex="3"/>
                        <label for="remember" class="text-sm text-neutral-500">{{ __("Remember me") }}</label>
                    </div>
                    <button type="submit" class="mt-4 w-full" tabIndex="4"
                            class="bg-neutral-800 text-neutral-50 hover:cursor-pointer">{{ __("Log in") }}</button>
                </div>

                <div class="text-muted-foreground text-center text-sm text-neutral-600">
                    {{ __("Don't have an account? ") }} <a href="{{ route('register') }}" tabIndex="5">{{ __("Sign up") }}</a>
                </div>
            </form>
        </div>

        <x-layouts.elements.footer/>
    </div>
</x-layouts.main>
