<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/formulaire-header.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{asset('assets/js/formulaire.js')}}"></script>
    <script src="{{asset('assets/js/dist/jquery.min.js')}}"></script>
</head>

<body onclick="hideBrandList()">
    <x-formulaire_header />
    <div class="progress">
        <div style="height:8px;width:30%;background-color:#70efdd;transition:2s" class="progress-bar"></div>
    </div>
    <main class="main-body">
        <div class="back-button" onclick="toFindVehicle()">
            <span class="arrow">
                <i class="fa fa-angle-left"></i>
            </span>
            <span class="back">Back</span>
        </div>
        <div class="main-container">
            <div class="second" id="second">
                <div class="main-container-header brand-header" style="padding-top:35px">
                    <span>Vehicle</span>
                    <span class="bold-font"> brand</span>
                </div>
                <div class="tw-px-3">
                    <div class="is-round-help-button">
                        <div class="asking-icon">?</div>
                        <span class="tw-text-sm">Where can I find the vehicle brand?</span>
                    </div>
                </div>
                <div class="tw-h-full">
                    <input placeholder="Ex: RENAULT" id="car-brand" onkeyup="getCarBrand()" />
                    <div class="cross-btn" id="cross" onclick="removeValue()"><i class='fa fa-xmark'></i></div>
                    <div class="car-list-pan" id="carlist">
                    </div>
                </div>
                <div class="brand-adv-pan" id="carbrandpan">
                    <div class="adv-title">Most common brands</div>
                    <div class="adv-main">
                        <img src="{{asset('assets/images/renault.svg')}}"
                            onclick="setBrandValue('Renault','147')"></img>
                        <img src="{{asset('assets/images/peugeot.svg')}}"
                            onclick="setBrandValue('Peugeot','135')"></img>
                        <img src="{{asset('assets/images/citroen.svg')}}" onclick="setBrandValue('Citroen','37')"></img>
                        <img src="{{asset('assets/images/volkswagen.svg')}}"
                            onclick="setBrandValue('Volkswagen','184')"></img>
                        <img src="{{asset('assets/images/tesla.svg')}}" onclick="setBrandValue('Tesla','172')"></img>
                        <img src="{{asset('assets/images/mercedes.svg')}}"
                            onclick="setBrandValue('Mercedes-Benz','116')"></img>
                        <img src="{{asset('assets/images/audi.svg')}}" onclick="setBrandValue('Audi','10')"></img>
                        <img src="{{asset('assets/images/bmw.svg')}}" onclick="setBrandValue('BMW','18')"></img>
                    </div>
                </div>
                <div class="main-container-footer disabled-container-footer" id="disablefooter">
                    <div class="next-button  disabled-button" id='disablebuton'>
                        Next
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-formulaire_footer />
    <script>
        const username = localStorage.getItem('car_brand')
        var divElement = document.querySelector('div');
        if (!username) {
        } else {
            document.getElementById("car-brand").value = username;
            document.getElementById('car-brand').setAttribute('readonly', true)
            document.getElementById("cross").style.display = "flex"
            document.getElementById("disablefooter").classList.remove("disabled-container-footer");
            document.getElementById("disablebuton").classList.remove("disabled-button");
            document.getElementById("carbrandpan").style.display = "none"
            if (!divElement.classList.contains('disabled-button')) {
                document.getElementById("disablebuton").addEventListener('click', () => {
                    location.href = "/formulaire/vehicle-model"
                })
            }
        }
    </script>
</body>

</html>