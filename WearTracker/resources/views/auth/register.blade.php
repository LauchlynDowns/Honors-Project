<x-guest-layout>
    <x-auth-card>
    <div class="formcontainer">

        <!-- Validation Errors -->
        <div class="middle">
<div class="title">WearTracker</div>
<div class="form">
<x-auth-validation-errors class="errors" :errors="$errors" />
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="formsection black"><p class="black bold center">Create An Account</p></div>
            <!-- Name -->
            <div class="formsection bold">
                <x-label for="name" :value="__('👤 Name')" />

                <x-input id="name" class="forminput" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="formsection bold">
                <x-label for="email" :value="__('✉️ Email Address')" />

                <x-input id="email" class="forminput" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="formsection bold">
                <x-label for="password" :value="__('🔒 Password')" />

                <x-input class="forminput" id="password" 
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="formsection bold">
                <x-label for="password_confirmation" :value="__('🔒 Confirm Password')" />

                <x-input id="password_confirmation" class="password"
                                type="password"
                                name="password_confirmation" class="forminput" required />
                                
                                <div style="margin-top:5%;margin-bottom:5%;" class="signinbutton-container"> 
            <x-button class="signinbutton">
                    {{ __('Register') }}
                </x-button>
</div>
            
             <div class="center black bold">Already got an account?</div>
             <div class="center">

                <a href="{{ route('login') }}">
                    {{ __('Sign In') }}
                </a>
</div>
                </div>
            </form>
            </div></div>



    </x-auth-card>
</x-guest-layout>
