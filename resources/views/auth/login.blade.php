<x-guest-layout>
    <x-slot name="title">
        - Connexion
    </x-slot>
    <x-authentication-card>
        <x-slot name="backwoard_option">
            <a href="{{ route('register') }}" class="tag">Créer un Compte</a>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-input">
                <x-label for="surname"> <i class="fas fa-envelope"></i> </x-label>
                <x-input id="surname" type="text" name="surname" :value="old('surname')" placeholder="Surnom *" required autofocus autocomplete="username" />
            </div>

            <div class="form-input">
                <x-label for="password"><i class="fas fa-lock"></i></x-label>
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Mot de passe *" required autocomplete="current-password" />
            </div>

            <div class="form-input-checkbox">
                <x-checkbox id="remember_me" name="remember" />
                <label for="rememberme">Remember me</label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié?') }}
                    </a>
                @endif
            </div>

            <div class="form-input">
                <button class="main-btn" type="submit">{{ __('Se connecter') }}</button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
