<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/formulaire-header.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{asset('assets/js/formulaire.js')}}"></script>
    <script src="{{asset('assets/js/dist/jquery.min.js')}}"></script>
</head>

<body>
    <div class="container">
        <x-formulaire_header />
        <div class="progress">
            <div style="height:100%;width:60%;background-color:#70efdd;transition:2s" class="progress-bar"></div>
        </div>
        <main class="main-body">
            <div class="back-button" onclick="toVehicleVersion()">
                <span class="arrow">
                    <i class="fa fa-angle-left"></i>
                </span>
                <span class="back">Back</span>
            </div>
            <div class="main-container">
                <div class="second" id="second">
                    <div class="main-container-header" style="padding-top:35px">
                        <span>Car</span>
                        <span class="bold-font"> energy</span>
                    </div>
                    <div class="tw-px-3">
                        <div class="is-round-help-button">
                            <div class="asking-icon">?</div>
                            <span class="tw-text-sm">Which car enrgy do you want?</span>
                        </div>
                    </div>
                </div>
                <div class="tw-h-full tw-full-size">
                    <input placeholder="Ex: Gasoil" id="car-energy" />
                    <div class="cross-btn" id="cross" onclick="removeEnergyValue()"><i class='fa fa-xmark'></i></div>
                </div>
                <div class="brand-adv-pan" id="energy-pan">
                    <div class="adv-title">Car energies</div>
                    <div class="adv-main main-width">
                        <div class="choose-model">
                            <div class="choose-model-btn" onclick="setEnergy('Gasoil')">Gasoil</div>
                        </div>
                        <div class="choose-model">
                            <div class="choose-model-btn" onclick="setEnergy('Petrol')">Petrol</div>
                        </div>
                        <div class="choose-model">
                            <div class="choose-model-btn" onclick="setEnergy('Hybrid')">Hybrid</div>
                        </div>
                        <div class="choose-model">
                            <div class="choose-model-btn" onclick="setEnergy('Electric')">Electric</div>
                        </div>
                    </div>
                </div>
                <div class="main-container-footer disabled-container-footer" id="disablefooter">
                    <div class="next-button  disabled-button" id="disablebutton">
                        Next
                    </div>
                </div>
            </div>
    </div>
    </main>
    <x-formulaire_footer />
    <script>
        const car_energy = localStorage.getItem("car_energy")
        if (car_energy) {
            document.getElementById("energy-pan").style.display = "none"
            document.getElementById("disablefooter").classList.remove("disabled-container-footer");
            document.getElementById("disablebutton").classList.remove("disabled-button");
            document.getElementById('car-energy').setAttribute('readonly', true)

            document.getElementById("car-energy").value = car_energy;
            document.getElementById("cross").style.display = "flex"
            document.getElementById("disablebutton").addEventListener('click', () => {
                location.href = "/formulaire/range";
            })
        } else {
        }
    </script>
</body>

</html>