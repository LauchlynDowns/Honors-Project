<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-center">
                   <h1 style="font-size:150%">Bike Not found! </h1><br>
                 <h3>  Please create a bike before adding mileage or components!</h3>
                 <br>
                 <a class="text-underline" href="/dashboard">Click here to go back to dashboard</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
