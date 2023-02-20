<x-app-layout>

    <body class="mainpagebody" style="background-color:1F4BE9;!important">
        <div class="garage">
            @foreach ($parents as $parent)
                <div class="parent">
                    <div class="garage-item-top-image"
                        style="background-image: url('{{ asset('storage/' . $parent->image_path) }}');">
                        <div class="garage-item-text">{{ $parent->Parent_brand }} {{ $parent->Parent_model }}</div>
                    </div>
                    <div class="mileageinfo">
                        <div class="mileageinfo-miles">{{ $parent->mileage }} miles</div>
                        <div class="mileageinfo-miles">tracked since {{ $parent->created_at }}</div>
                    </div>
                    <div class="component-holder">
                    </div>



                    <div class="parent-bottom-buttons">
                        <form action="/view" method="post">
                            @csrf
                            <button value="{{ $parent->id }}" name="bikeid" class="signinbutton-small">
                                View Full Bike
                            </button>
                        </form>

                        <form action="/deletebike" method="POST">
                            @csrf
                            <button style="background-color:red;" name="bikeid" value="{{ $parent->id }}"
                                class="signinbutton-small"
                                onclick="return confirm('Are you sure to delete {{ $parent->Parent_model }} ? ')">
                                Delete bike
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
            <!-- add bike area -->
            <div class="parent ">
                <div class="garage-item-top-image greybackground">
                    <div class="garage-item-text">Add A Bike</div>
                </div>
                <div>
                    <form method="post" class="bike-add-form-container" action="/addnewparent"
                        enctype="multipart/form-data">
                        @csrf
                        <input name="User_id" type="hidden" value="{{ Auth::user()->id }}">
                        <p>Add a bike picture (optional)</p>
                        <input type="file" id="myFile" name="filename">
                        <p>Bike Brand</p>
                        <input class="" placeholder="E.g specialized" type="text" name="Parent_brand" required>
                        <p>Bike Model</p>
                        <input class="" placeholder="E.g Stumpjumper" type="text" name="Parent_model" required>
                        <p>model year</p>
                        <input class="" placeholder="2020" type="text" name="Parent_MY" required>
                        <p>Information</p>
                        <input class="" placeholder="e.g blue color" type="text" name="Parent_info" required>

                        <p>serial number</p>
                        <input class="" placeholder="serial number of the bike" type="text"
                            name="Parent_serialnumber" required>
                        <br>
                        <button type="submit" class="signinbutton">Add Bike</button>
                    </form>
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
    </body>
</x-app-layout>
