<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/formulaire-header.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{asset('assets/js/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/formulaire.js')}}"></script>
</head>

<body onclick="hideModelList()">
    <div class="container">
        <x-formulaire_header />
        <div class="progress">
            <div style="height:8px;width:40%;background-color:#70efdd;transition:2s" class="progress-bar"></div>
        </div>
        <main class="main-body">
            <div class="back-button" onclick="toVehicleBrand()">
                <span class="arrow">
                    <i class="fa fa-angle-left"></i>
                </span>
                <span class="back">Back</span>
            </div>
            <div class="main-container">
                <div class="second" id="second">
                    <div class="main-container-header" style="padding-top:35px">
                        <span>Vehicle</span>
                        <span class="bold-font"> model</span>
                    </div>
                    <div class="tw-px-3">
                        <div class="is-round-help-button">
                            <div class="asking-icon">?</div>
                            <span class="tw-text-sm">Where can I find the vehicle model?</span>
                        </div>
                    </div>
                    <div class="previous-status">
                        <div class="is-round-help-button" onclick="toVehicleBrand()">
                            <span class="tw-text-sm" id="carbrand"></span>
                        </div>
                    </div>
                </div>
                <div class="tw-h-full">
                    <input placeholder="Ex: 208" id="car-model" onkeyup="getCarModel()" />
                    <div class="cross-btn" id="cross" onclick="removeModelValue()"><i class='fa fa-xmark'></i></div>
                    <div class="car-list-pan" id="carmodellist">
                    </div>
                </div>
                <div class="brand-adv-pan" id="carmodelpan">
                    <div class="adv-title">Most common models</div>
                    <div class="adv-main main-width" id="model_list">
                        <!-- <div class="choose-model" onclick="">
                            <div class="choose-model-btn">308</div>
                        </div>
                        <div class="choose-model">
                            <div class="choose-model-btn">307</div>
                        </div>
                        <div class="choose-model">
                            <div class="choose-model-btn">206</div>
                        </div>
                        <div class="choose-model">
                            <div class="choose-model-btn">208</div>
                        </div>
                        <div class="choose-model">
                            <div class="choose-model-btn">207</div>
                        </div> -->
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
        const username = localStorage.getItem('car_model')
        const carbrand = localStorage.getItem('car_brand')
        if (!username) {
        } else {
            document.getElementById("car-model").value = username;
            document.getElementById('car-model').setAttribute('readonly', true)
            document.getElementById("cross").style.display = "flex"
            document.getElementById("disablefooter").classList.remove("disabled-container-footer");
            document.getElementById("disablebuton").classList.remove("disabled-button");
            document.getElementById("carmodelpan").style.display = "none"
            document.getElementById("disablebuton").addEventListener('click', () => {
                location.href = "/formulaire/vehicle-version"
            })
        }
        document.getElementById("carbrand").innerHTML = carbrand;
        const value = document.getElementById("car-model").value;
        const brand_id = localStorage.getItem('car_brand_id')

        $.ajax({
            url: "/retrieve-car-model-data",
            type: 'GET',
            data: { value1: brand_id },
            success: function (result) {
                const car_model = document.getElementById("model_list");
                car_model.innerHTML = ''
                result.slice(-5).forEach(element => {
                    const modellistdiv = document.createElement("div");
                    modellistdiv.textContent = element.name;
                    car_model.appendChild(modellistdiv)
                    modellistdiv.addEventListener('click', () => {
                        const input = document.getElementById('car-model');
                        localStorage.setItem('car_model', element.name);
                        localStorage.setItem('car_model_id', element.id_car_model)
                        input.value = element.name;
                        // dropdownpan.style.display = "none"
                        document.getElementById("carmodelpan").style.display = "none"
                        document.getElementById("cross").style.display = "flex"
                        document.getElementById("disablefooter").classList.remove("disabled-container-footer");
                        document.getElementById("disablebuton").classList.remove("disabled-button");
                        document.getElementById("disablebuton").addEventListener('click', () => {
                            location.href = "/formulaire/vehicle-version"
                        })
                    });
                });
                // result.slice(-5).forEach(element => {
                //     car_model.innerHTML += `
                //         <div class="choose-model" >
                //             <div class="choose-model-btn">${element.name}</div>
                //         </div>
                //     `
                // })
            },
            error: function (error) {
            }
        });
    </script>
</body>

</html>