<x-app-layout>

    <body class="mainpagebody" style="background-color:1F4BE9;!important">
        <div class="garage">
            @foreach ($parents as $parent)
                <div class="parent">
        <div class="garage-item-top-image" style="background-image: url('{{asset('storage/' . $parent->image_path)}}');">
                        <div class="garage-item-text">{{ $parent->Parent_brand }} {{ $parent->Parent_model }}</div>
                    </div>
                    <div class="mileageinfo">
                        <div class="mileageinfo-miles">{{$parent->mileage}} miles</div>
                        <div class="mileageinfo-miles">tracked since {{ $parent->created_at }}</div>
                    </div>
                    <div class="component-holder">
                        <div class="component">
                            <div class="component-title-holder">
                                <div class="component-type">FRONT CHAINRING</div>
                                <div class="component-model">Uniteco oval ring</div>
                            </div>
                        </div>
                        <div class="component">w</div>
                        <div class="component">w</div>


                    </div>
                    <div class="parent-bottom-buttons">
                        <div class="bluebutton signinbutton-small bikebutton">
                            View Full Bike
                        </div>
                        <form action="/deletebike" method="POST">
                            @csrf

                            <button style="background-color:red;" name="bikeid" value="{{ $parent->id }}"
                                class="bluebutton signinbutton-small bikebutton"
                                onclick="return confirm('Are you sure to delete {{ $parent->Parent_model }} ? ')">
                                Delete bike
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
           
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
