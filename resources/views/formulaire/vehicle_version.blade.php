<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/formulaire-header.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{asset('assets/js/formulaire.js')}}"></script>
    <script src="{{asset('assets/js/dist/jquery.min.js')}}"></script>
</head>

<body onclick="hideGenerationList()">
    <div class="container">
        <x-formulaire_header />
        <div class="progress">
            <div style="height:8px;width:50%;background-color:#70efdd;transition:2s" class="progress-bar"></div>
        </div>
        <main class="main-body">
            <div class="back-button" onclick="toVehicleModel()">
                <span class="arrow">
                    <i class="fa fa-angle-left"></i>
                </span>
                <span class="back">Back</span>
            </div>
            <div class="main-container">
                <div class="second" id="second">
                    <div class="main-container-header" style="padding-top:35px">
                        <span>Vehicle</span>
                        <span class="bold-font"> generation</span>
                    </div>
                    <div class="tw-px-3">
                        <div class="is-round-help-button">
                            <div class="asking-icon">?</div>
                            <span class="tw-text-sm">Where can I find the vehicle generation?</span>
                        </div>
                    </div>
                    <div class="previous-status">
                        <div class="is-round-help-button" onclick="tovehiclebrand()">
                            <span class="tw-text-sm" id="car-brand"></span>
                        </div>
                        <div class="is-round-help-button" onclick="toVehicleModel()">
                            <span class="tw-text-sm" id="car-model"></span>
                        </div>
                    </div>
                </div>
                <div class="tw-h-full tw-full-size">
                    <input placeholder="Ex: 1.2 TDI" id="car-generation" onkeyup="findCarGeneration()" />
                    <div class="cross-btn" id="cross" onclick="removeGenerationValue()"><i class='fa fa-xmark'></i>
                    </div>
                    <div class="car-list-pan" id="cargenerationlist">
                    </div>
                </div>
                <div class="main-container-footer disabled-container-footer" id="disablefooter">
                    <div class="next-button  disabled-button" id="disablebuton">
                        Next
                    </div>
                </div>
            </div>
    </div>
    </main>
    <x-formulaire_footer />
    <script>
        const carmodel = localStorage.getItem('car_model')
        const carbrand = localStorage.getItem('car_brand')
        document.getElementById("car-brand").innerHTML = carbrand;
        document.getElementById("car-model").innerHTML = carmodel;
        const cargeneration = localStorage.getItem("car_generation")
        if (cargeneration) {
            document.getElementById("car-generation").value = cargeneration;
            document.getElementById('car-generation').setAttribute('readonly', true)
            document.getElementById("cross").style.display = "flex"
            document.getElementById("disablefooter").classList.remove("disabled-container-footer");
            document.getElementById("disablebuton").classList.remove("disabled-button");
            document.getElementById("disablebuton").addEventListener('click', () => {
                location.href = "/formulaire/car-energy"
            })
        } else {
        }
    </script>
</body>

</html>