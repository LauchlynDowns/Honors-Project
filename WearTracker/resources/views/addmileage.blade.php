<x-app-layout>

    <body class="mainpagebody" style="background-color:1F4BE9;!important">
        <div class="garage space-evenly">
            <div class="view-parent">
                <a href="/dashboard">
                    <div class="signinbutton quater" style="margin:20px;" type="submit">Back</div>
                    <a>
                        <form method="post" class="bike-add-form-container" action="/newlog">
                            @csrf

                            <p>Please select the bike you wish to add the mileage to</p>
                            <select name="Parent_Id" id="Parent_Id">
                                @foreach ($parents as $parent)
                                    <option value="{{ $parent->id }}">{{ $parent->Parent_brand }}
                                        {{ $parent->Parent_model }}</option>
                                @endforeach
                            </select>
                            <p>Ride Type</p>
                            <input name="Log_type" style="width:30%;" list="Log_type">
                            <datalist name="Log_type" id="Log_type">
                                <option value="Enduro riding">Enduro riding</option>
                                <option value="Trail ride">Trail ride</option>
                                <option value="XC ride">XC ride</option>
                                <option value="Downhill ride">Downhill ride</option>
                                <option value="Skatepark ride">Skatepark ride</option>
                                <option value="Gravel ride">Gravel ride</option>
                                <option value="Road ride">Road ride</option>
                            </datalist>
                            <p>Ride Notes</p>
                            <input class="" placeholder="e.g good day, check tyres next time" type="text"
                                name="Log_info" required>
                            <p>Ride Mileage</p>
                            <input class="quater" placeholder="e.g 20 miles" type="number" name="Log_mileage" required>
                            <p>Ride Hours</p>
                            <input class="quater" placeholder="e.g 5" type="number" name="Log_hours" required>
                            <br>
                            <button type="submit" class="signinbutton">Add Component</button>
                        </form>

                        <div style="margin-bottom:10vh" class="parent-bottom-buttons">

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
            <div class="nav-item">
                <div class="nav-icon">➕</div>
                <p class="nav-text">Add Mileage</p>
            </div>
            <div class="nav-item">
                <div class="nav-icon">⚙️</div>
                <p class="nav-text">Settings</p>
            </div>

        </div>
        </div>


    </body>
</x-app-layout>
