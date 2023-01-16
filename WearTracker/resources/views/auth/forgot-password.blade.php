<x-guest-layout>
    <x-auth-card>
       
        <div class="formcontainer">
        <div class="form">
            <div style="color:black;" class="black formsection">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
</div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="errors" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="black formsection">
            <!-- Email Address -->
            <div>
                <x-label style="color:black;" for="email" :value="__('Email')" />

                <x-input id="email" class="forminput" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div>
                <x-button class="signinbutton-small">
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
</div>
<div class="formsection">
<div class="registerforgot">
              
                    <a class="black bold" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
             
                <a class="black bold" href="{{ route('register') }}">
                {{ __('Register') }}
</a>
            </div></div>
</div>
        </form>
</div>
        </div>
    </x-auth-card>
</x-guest-layout>
