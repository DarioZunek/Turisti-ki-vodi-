<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <img src="{{ URL::asset('images/logo.JPG'); }}" alt="logo">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Zaboravili ste lozinku? Nema problema. Upišite email adresu i poslati ćemo vam link za resetiranje lozinke.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Link za reset lozinke putem emaila') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
