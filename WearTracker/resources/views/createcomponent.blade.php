<x-app-layout>

    <body class="mainpagebody" style="background-color:1F4BE9;!important">
        <div class="garage space-evenly">
            <div class="view-parent">
                <a href="/dashboard">
                    <div class="signinbutton quater" style="margin:20px;" type="submit">Back</div>
                    <a>
                        <form method="post" class="bike-add-form-container" action="/newcomponent">
                            @csrf

                            <p>Please select the bike you wish to add the component to</p>
                            <select name="Parent_Id" id="Parent_Id">
                                @foreach ($parents as $parent)
                                    <option value="{{ $parent->id }}">{{ $parent->Parent_model }}</option>
                                @endforeach
                            </select>
                            <p>Component Type</p>
                            <input name="Component_type" style="width:30%;" list="Component_type">
                            <datalist name="Component_type" id="Component_type">
                                <option value="">- Please select a Component Type -</option>
                                <option value="Rear Derailleur">Rear Derailleur</option>
                                <option value="Front Derailleur">Front Derailleur</option>
                                <option value="Front Shifter">Front Shifter</option>
                                <option value="Rear Shifter">Rear Shifter</option>
                                <option value="Cassette">Cassette</option>
                                <option value="Chain">Chain</option>
                                <option value="Front Chainring">Front Chainring</option>
                                <option value="Crankset">Crankset</option>
                                <option value="Suspension Fork">Suspension Fork</option>
                                <option value="Rear Shock">Rear Shock</option>
                                <option value="Dropper Seatpost">Dropper Seatpost</option>
                                <option value="Fixed Seatpost">Fixed Seatpost</option>
                                <option value="Saddle">Saddle</option>
                                <option value="Front Brake">Front Brake</option>
                                <option value="Rear Brake">Rear Brake</option>
                                <option value="Front Brake Pad">Front Brake Pad</option>
                                <option value="Rear Brake Pad">Rear Brake Pad</option>
                                <option value="Bottom Bracket">Bottom Bracket</option>
                                <option value="Headset Bearings">Headset Bearings</option>
                                <option value="Headset">Headset</option>
                                <option value="Shock Bushings">Shock Bushings</option>
                                <option value="Frame Bearings">Frame Bearings</option>
                                <option value="Handlebars">Handlebars</option>
                                <option value="Handlebar Grips">Handlebar Grips</option>
                                <option value="Stem">Stem</option>
                                <option value="Wheelset">Wheelset</option>
                                <option value="Front Wheel Rim">Front Wheel Rim</option>
                                <option value="Rear Wheel Rim">Rear Wheel Rim</option>
                                <option value="Front Wheel Spokes">Front Wheel Spokes</option>
                                <option value="Rear Wheel Spokes">Rear Wheel Spokes</option>
                                <option value="Front Wheel Hub">Front Wheel Hub</option>
                                <option value="Rear Wheel Hub">Rear Wheel Hub</option>
                                <option value="Rear Wheel Bearings">Rear Wheel Bearings</option>
                                <option value="Front Wheel Bearings">Front Wheel Bearings</option>
                                <option value="Front Tyre">Front Tyre</option>
                                <option value="Rear Tyre">Rear Tyre</option>

                            </datalist>
                            <p>Component Brand</p>
                            <input class="" placeholder="E.g Fox" type="text" name="Component_brand" required>
                            <p>Component Model</p>
                            <input class="" placeholder="E.g DHX2" type="text" name="Component_model" required>
                            <p>Information</p>
                            <input class="" placeholder="e.g Rear shock" type="text" name="Component_info"
                                required>
                            <p>model year</p>
                            <input class="" placeholder="2020" type="text" name="Component_year" required>
                            <input placeholder="2020" type="hidden" name="Component_creationdate" value="2023"
                                required>
                            <input type="hidden" name="Component_miles" value="0" required>
                            <input type="hidden" name="Component_hours" value="0" required>
                            <br>
                            <button type="submit" class="signinbutton">Add Component</button>
                        </form>

                        <div style="margin-bottom:10vh" class="parent-bottom-buttons">

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
    </body>
</x-app-layout>
