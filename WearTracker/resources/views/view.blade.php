<x-app-layout>

    <body class="mainpagebody" style="background-color:1F4BE9;!important">
        <div class="garage space-evenly">
            @foreach ($parents as $parent)
                <div class="view-parent">
                    <div class="view-garage-item-top-image"
                        style="background-image: url('{{ asset('storage/' . $parent->image_path) }}');">
                        <div class="garage-item-text">{{ $parent->Parent_brand }} {{ $parent->Parent_model }}</div>
                    </div>
                    <div class="mileageinfo">
                        <div class="mileageinfo-miles">{{ $parent->mileage }} miles</div>
                        <div class="mileageinfo-miles">tracked since {{ $parent->created_at }}</div>
                    </div>
                    <div class="view-component-holder">
                        <div class="view-component">
                            <div class="component-title-holder">
                                <div class="component-type">FRONT CHAINRING</div>
                                <div class="component-model">Uniteco oval ring</div>
                            </div>
                        </div>
                        <div class="view-component">
                  
</div>

                    </div>
                    <div style="margin-bottom:10vh" class="parent-bottom-buttons">
                        <form action="/deletebike" method="POST">
                            @csrf

                            <button style="background-color:red;" name="bikeid" value="{{ $parent->id }}"
                                class="signinbutton-small"
                                onclick="return confirm('Are you sure to delete {{ $parent->Parent_model }} ? ')">
                                Delete bike
                            </button>
                        </form>
                    </div>

                        <form method="POST" class="bike-add-form-container" action="/view">
                        @csrf
                         <input name="Parent_Id" type="hidden" value="{{ $parent->id }}">
                        <input name="User_id" type="hidden" value="{{ Auth::user()->id }}">
                        <p>Component Brand</p>
                        <input class="" placeholder="E.g Fox" type="text" name="Parent_brand" required>
                        <p>Component Model</p>
                        <input class="" placeholder="E.g DHX2" type="text" name="Parent_model" required>
                        <p>model year</p>
                        <input class="" placeholder="2020" type="text" name="Parent_MY" required>
                        <p>Information</p>
                        <input class="" placeholder="e.g Rear shock" type="text" name="Parent_info" required>
                        <br>
                        <button type="submit" class="signinbutton">Add Bike</button>
                    </form>
                </div>
            @endforeach
       
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
