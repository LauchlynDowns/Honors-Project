<x-guest-layout>
    <x-auth-card>
    <div class="formcontainer">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
<div class="middle">
<div class="title">WearTracker🚴</div>
    <div class="form">
    
        <form method="POST" action="{{ route('login') }}">
        
            @csrf
            <div class="formsection black"><p class="black bold center">Sign in using your Email and Password</p></div>
            <!-- Email Address -->
            <div class="formsection bold">
                <x-label for="email" :value="__('📧 Email')" />
                <br>
                <x-input id="email" class="forminput" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="formsection bold">
                <x-label for="password" :value="__('🔒 Password')" />
                <br>
                <x-input id="password" class="forminput"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

            <!-- Remember Me -->
            <br>
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
                </div>
            <div class="formsection">
                <div class="signinbutton-container">
            <x-button class="signinbutton">
                    {{ __('Sign In') }}
                </x-button>
            </div></div>
                    <div class="formsection">
            <div class="registerforgot">
                @if (Route::has('password.request'))
                    <a class="black bold" href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>
                @endif
                <a class="black bold" href="{{ route('password.request') }}">
                {{ __('Register') }}
</a>
            </div></div>
        </form>
        </div>
        </div>
</div>
    </x-auth-card>
</x-guest-layout>
