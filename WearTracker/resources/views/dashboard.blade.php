<x-app-layout>
<body class="mainpagebody">
    <div class="garage">
    @foreach ($parents as $parent)
        <div class="parent">
            <div class="garage-item-top-image">
                <div class="garage-item-text">{{ $parent->Parent_brand }} {{ $parent->Parent_model }}</div>
            </div>
            <div class="mileageinfo"><div class="mileageinfo-miles">3000mi</div><div class="mileageinfo-miles">Owned since march 2021</div></div>
       <div class="component-holder">
        <div class="component">
            <div class="component-title-holder"><div class="component-type">FRONT CHAINRING</div><div class="component-model">Uniteco oval ring</div></div>
        </div>
            <div class="component">w</div>
             <div class="component">w</div>
          
             
        </div>
        <div class="parent-bottom-buttons">
       <div class="parent-bottom-buttons-button bluebutton">
        Button
       </div>
       <div class="parent-bottom-buttons-button bluebutton">
        Button
       </div>
        </div> 
    </div>
    @endforeach
    <!-- add bike area -->
    <div class="parent">
            <div class="garage-item-top-image greybackground">
                <div class="garage-item-text">Add A Photo</div>
            </div>
            <div class="bike-add-form-container">
            <form method="post" action="/addnewparent">
                        @csrf
                        <input name="User_id" type="hidden" value="{{ Auth::user()->id }}">
                            <p>Bike Brand</p>
                            <input class=""
                                placeholder="E.g specialized" type="text"
                                name="Parent_brand" required>
                            <p>Bike Model</p>
                            <input class="" placeholder="E.g Stumpjumper"
                                type="text" name="Parent_model" required>
                            <p>model year</p>
                            <input class="" placeholder="2020"
                                type="text" name="Parent_MY" required>
                                <p>Information</p>
                            <input class="" placeholder="e.g blue color"
                                type="text" name="Parent_info" required>
                        
                                <p>serial number</p>
                            <input class="" placeholder="serial number of the bike"
                                type="text" name="Parent_serialnumber" required>

                        <button type="submit" class="btn btn-primary">Add Bike</button>
                    </form>


            </div>



       

       <div class="bottom-area-container">
        <div class="nav-item">
            <div class="nav-icon">🚲</div>
            <p class="nav-text">All Bikes</p>
        </div>
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
