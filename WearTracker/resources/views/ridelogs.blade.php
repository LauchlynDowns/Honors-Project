<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('RideLogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <tr>
                            <th>Log creation time</th>
                            <th>Bike used</th>
                            <th>Riding Type</th>
                            <th>Ride Information</th>
                            <th>Mileage</th>
                            <th>Time</th>
                        </tr>
                           @foreach ($logs as $log)
                        <tr>
                            <td>{{$log->created_at}}</td>
                            <td>{{$log->Parent_Id}}</td>
                            <td>{{$log->Log_type}}</td>
                             <td>{{$log->Log_info}}</td>
                            <td>{{$log->Log_mileage}}</td>
                            <td>{{$log->Log_hours}}</td>
                        </tr>
                        @endforeach
                    </table>








                </div>
            </div>
        </div>
    </div>





    <div class="bottom-area-container">
        <a href="/dashboard">
            <div class="nav-item">
                <div class="nav-icon">🚲</div>
                <p class="nav-text">All Bikes</p>
            </div>
        </a>
        <a href="/addmileage">
            <div class="nav-item">
                <div class="nav-icon">➕</div>
                <p class="nav-text">Add Mileage</p>
            </div>
        </a>
        <a href="/dashboard">
            <div class="nav-item">
                <div class="nav-icon">⚙️</div>
                <p class="nav-text">Settings</p>
            </div>
        </a>
    </div>
</x-app-layout>
