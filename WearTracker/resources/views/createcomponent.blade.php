<x-app-layout>

    <body class="mainpagebody" style="background-color:1F4BE9;!important">
        <div class="garage space-evenly">
            <div class="view-parent">
            <a href="/dashboard">
            <div class="signinbutton quater" style="margin:20px;" type="submit" >Back</div>
            <a>
                <form method="post" class="bike-add-form-container" action="/newcomponent">
                    @csrf
                   
                    <p>Please select the bike you wish to add the component to</p>
                    <select name="Parent_Id" id="Parent_Id">
                   @foreach ($parents as $parent)
                        <option value="{{ $parent->id }}">{{ $parent->Parent_model }}</option>
                        @endforeach
                    </select>
                    <p>Component Brand</p>
                    <input class="" placeholder="E.g Fox" type="text" name="Component_brand" required>
                    <p>Component Model</p>
                    <input class="" placeholder="E.g DHX2" type="text" name="Component_model" required>
                     <p>Information</p>
                    <input class="" placeholder="e.g Rear shock" type="text" name="Component_info" required>
                    <p>model year</p>
                    <input class="" placeholder="2020" type="text" name="Component_year" required>          
                    <input placeholder="2020" type="hidden" name="Component_creationdate" value="2023" required>
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
