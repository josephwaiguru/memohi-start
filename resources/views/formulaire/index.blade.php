<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/formulaire-header.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <x-formulaire_header />
        <div class="progress">
            <div style="height:100%;width:10%;background-color:#70efdd;transition:2s" class="progress-bar"></div>
        </div>
        <main class="main-body">
            <div class="polygon-background" id="poly">
            </div>
            <div class="back-button">
                <span class="arrow">
                    <i class="fa fa-angle-left"></i>
                </span>
                <span class="back">Back</span>
            </div>
            <div class="main-container">
                <div class="first-page" id="first">
                    <div class="main-container-header" id="mahe">
                        <img src="{{asset('assets/images/auto_title.svg')}}"></img>
                        <span class="header-title">The perks of Leocare</span>
                    </div>
                    <div class="main-container-body" id="mabo">
                        <div class="container-body-column">
                            <img src="{{asset('assets/images/towing.svg')}}"></img>
                            <div class="column-text">
                                <span class="text-title">0 Km assistance</span>
                                <span class="text-main">Available in all our plans</span>
                            </div>
                        </div>
                        <div class="container-body-column">
                            <img style="width:70px" src="{{asset('assets/images/secondary_conductor.svg')}}"></img>
                            <div class="column-text">
                                <span class="text-title">Secondary driver</span>
                                <span class="text-main">And even as a young driver!</span>
                            </div>
                        </div>
                        <div class="container-body-column">
                            <img style="width:80px" src="{{asset('assets/images/car-leasing.svg')}}"></img>
                            <div class="column-text">
                                <span class="text-title">Loan vehicle</span>
                                <span class="text-main">The loan of a vehicle included in all of our plans</span>
                            </div>
                        </div>
                        <div class="container-body-column">
                            <img src="{{asset('assets/images/recovery.svg')}}"></img>
                            <div class="column-text">
                                <span class="text-title">Earn back your license points</span>
                                <span class="text-main">Road awareness course free of charge</span>
                            </div>
                        </div>
                    </div>
                    <div class="main-container-footer">
                        <div class="next-button" onclick="toFindVehicle()">
                            Next
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <x-formulaire_footer />
</body>
<script src="{{asset('assets/js/formulaire.js')}}"></script>

</html>