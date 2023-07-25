<x-guest-layout>
    <x-authentication-card>
        <x-slot name="backwoard_option">
            <a href="{{ route('login') }}" class="tag">Se connecter</a>
        </x-slot>

        <div class="mb-4 text-sm text-white">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-white">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-input">
                <x-label for="email"> <i class="fas fa-envelope"></i> </x-label>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Adresse email *" required autofocus autocomplete="username" />
            </div>

            <div class="form-input">
                <x-button class="main-btn">
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
