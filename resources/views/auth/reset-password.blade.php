<x-guest-layout>
    <x-authentication-card>
        <x-slot name="backwoard_option">
            <a href="{{ route('login') }}" class="tag">Se connecter</a>
        </x-slot>

        <x-validation-errors class="mb-4" />

        <h4>Créer un nouveau mot de passe</h4>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="form-input">
                <x-label for="email"> <i class="fas fa-envelope"></i> </x-label>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            </div>

            <div class="form-input">
                <x-label for="password"><i class="fas fa-lock"></i></x-label>
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Mot de passe *" required autocomplete="new-password" />
            </div>

            <div class="form-input">
                <x-label for="password_confirmation"><i class="fas fa-lock"></i></x-label>
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" placeholder="Confirmer mot de passe *" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="main-btn">
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
