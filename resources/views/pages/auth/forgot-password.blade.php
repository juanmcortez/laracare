<x-layouts.main>
    <x-slot:title>{{ __('Recover your password') }}</x-slot:title>
    <x-slot:section></x-slot:section>
    <x-slot:sidebar></x-slot:sidebar>

    <x-ui.forms.title formtitle="Reset your account's password" formsubtitle="Enter your email below to reset your password"/>

    <x-ui.forms.holder :url="route('password.email')" class="auth-form">
        <div class="grid gap-6">
            <div class="grid gap-2">
                <Label for="email" class="text-sm text-neutral-500">{{ __("Email address") }}</Label>
                <input id="email" name="email" type="email" required tabIndex="1" autoComplete="email" value="{{ old('email') }}"
                       placeholder="{{ __("email@example.com") }}" class="placeholder-neutral-300"/>
            </div>
        </div>
        <button type="submit" class="mt-4 w-full" tabIndex="4">{{ __("Send reset email") }}</button>
    </x-ui.forms.holder>

</x-layouts.main>
