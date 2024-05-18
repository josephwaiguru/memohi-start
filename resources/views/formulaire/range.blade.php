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
            <div style="height:100%;width:70%;background-color:#70efdd;transition:2s" class="progress-bar"></div>
        </div>
        <main class="main-body">
            <div class="back-button" onclick="toCarEnergy()">
                <span class="arrow">
                    <i class="fa fa-angle-left"></i>
                </span>
                <span class="back">Back</span>
            </div>
            <div class="main-container">
                <div class="second" id="second">
                    <div class="main-container-header" style="padding-top:35px">
                        <span>KMS</span>
                        <span class="bold-font">range</span>
                    </div>
                    <div class="tw-px-3">
                        <div class="is-round-help-button">
                            <div class="asking-icon">?</div>
                            <span class="tw-text-sm">How many KMS do you use the car?</span>
                        </div>
                    </div>
                </div>
                <div class="tw-h-full tw-full-size">
                    <input placeholder="Ex: 100Km" type="number" id="car-kms" onchange="setKMS()" required />
                    <div class="cross-btn" id="cross" onclick="removeKMSValue()"><i class='fa fa-xmark'></i></div>
                </div>
                <div class="main-container-footer disabled-container-footer" id="disablefooter">
                    <div class="next-button disabled-button" id="disablebutton">
                        Next
                    </div>
                </div>
            </div>
    </div>
    </main>
    <x-formulaire_footer />
    <script>
        const car_range = localStorage.getItem("car_range")
        if (car_range) {
            document.getElementById("disablefooter").classList.remove("disabled-container-footer");
            document.getElementById("disablebutton").classList.remove("disabled-button");
            document.getElementById('car-kms').setAttribute('readonly', true)
            document.getElementById("car-kms").value = car_range;
            document.getElementById("cross").style.display = "flex"
            document.getElementById("disablebutton").addEventListener('click', () => {
                location.href = "/formulaire/summary";
            })
        } else {
        }
    </script>
</body>

</html>