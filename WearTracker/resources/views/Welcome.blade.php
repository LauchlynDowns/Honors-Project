<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
    </head>
    
    <body class="mainpagebody">
        <div class="whitetriangle"></div>
        <div class="bluetriangle"></div>
        <div class="imagetriangle"></div>
        <div class="greentriangle"></div>
   <div class="welcome-container">
    <div class="welcome-section">WearTracker</div>
    <div class="welcome-section">The Ultimate bike <br>managment<br> platform</div>
    <div class="welcome-section"> <div class="signinbutton-container">
            <x-button class="signinbutton-small whitebutton">
                    {{ __('Sign In') }}
                </x-button> <x-button class="signinbutton-small whitebutton">
                    {{ __('Register') }}
                </x-button></div></div>
   </div>
    </body>
</html>
