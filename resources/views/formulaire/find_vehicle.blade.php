<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/formulaire-header.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{asset('assets/js/formulaire.js')}}"></script>
</head>

<body>
    <div class="container">
        <x-formulaire_header />
        <div class="progress">
            <div style="height:100%;width:20%;background-color:#70efdd;transition:2s" class="progress-bar"></div>
        </div>
        <main class="main-body">
            <div class="back-button" onclick="backFormulaire()">
                <span class="arrow">
                    <i class="fa fa-angle-left"></i>
                </span>
                <span class="back">Back</span>
            </div>
            <div class="main-container">
                <div class="second" id="second">
                    <div class="main-container-header">
                        <span class="bold-font">Find</span>
                        <span> my vehicle</span>
                    </div>
                    <div class="second-content">To save time, look for your vehicle using the license plate</div>
                    <div class="sec-con">
                        <div class="tw-basics-0" onclick="toVehicleBrand(); changeBox()">
                            <img src="{{asset('assets/images/auto.svg')}}"></img>
                            <div class="text-break">Find my vehicle using the brand / model</div>
                            <div class="check-box-model">
                                <div class="check-box" style="background-color:inherit" id="check">
                                </div>
                                <div class="check-box" style="background-coloe:#6f43d6;color:#ffffff;display:none"
                                    id="check-box">
                                    <i class="fa fa-check" style="font-size:30px"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <x-formulaire_footer />
</body>

</html>