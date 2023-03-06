<x-app-layout>

    <body class="mainpagebody" style="background-color:1F4BE9;!important">
        <div class="garage space-evenly">
            @foreach ($parents as $parent)
                <div class="view-parent">
                    <div class="garage-left-container">
                        <div class="view-garage-item-top-image"
                            style="background-image: url('{{ asset('storage/' . $parent->image_path) }}');">
                        </div>
                        <div class="garage-item-text">{{ $parent->Parent_brand }} {{ $parent->Parent_model }}</div>
                        <div class="mileageinfo">
                            <div class="mileageinfo-miles">tracked since {{ $parent->created_at }}</div>
                        </div>
                         <br>
                        <div style="display:flex; flex-direction:row; justify-content: center; width:100%;">
                            <form action="/deletebike" method="POST">
                                @csrf

                                <button style="background-color:red;" name="bikeid" value="{{ $parent->id }}"
                                    class="signinbutton-small"
                                    onclick="return confirm('Are you sure to delete {{ $parent->Parent_model }} ? ')">
                                    Delete bike
                                </button>
                            </form>
                        </div>
                        <br>
                        <div style="display:flex; flex-direction:row; justify-content: center; width:100%;">
                            <form action="/createcomponent" method="get">
                                <button class="signinbutton-small">Add Component</button>
                            </form>
                            
                            
                        </div>
                        <br>
                         <div style="display:flex; flex-direction:row; justify-content: center; width:100%;">
                         <form action="/ridelogs" method="get">
                                <button class="signinbutton-small">View Mileage Log</button>
                            </form>
                            </div>
                        <div class="mileagecontainer">
                            {{ $parent->Parent_mileage }} <br>
                            <p style="font-size:25px;">Miles</p>
                        </div>
                    </div>
                    <div class="view-component-holder">
                        @foreach ($components as $component)
                            <div class="view-component">

                                <div class="component-title-holder">
                                    <div class="component-type">
                                        &nbsp;&nbsp;&nbsp;{{ $component->Component_type }}&nbsp;&nbsp;&nbsp;</div>
                                    <div class="component-model"> {{ $component->Component_brand }}
                                        {{ $component->Component_model }} </div>

                                </div>
                                <div class="component-mileage-holder">
                                    <div class="component-mileage-holder-item"> {{ $component->Component_miles }} Miles
                                    </div>
                                    <div class="component-mileage-holder-item">{{ $component->Component_hours }} Hours
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            @endforeach

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
