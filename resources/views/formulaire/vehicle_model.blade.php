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
                    <div class="adv-main main-width model_choose_show model_choose_show_first" id="model_list">
                        <div class="choose-model" onclick="setModel('Clio','1588')">
                            <div class="choose-model-btn">Clio</div>
                        </div>
                        <div class="choose-model" onclick="setModel('Captur','1587')">
                            <div class="choose-model-btn">Captur</div>
                        </div>
                        <div class="choose-model" onclick="setModel('Espace','1590')">
                            <div class="choose-model-btn">Espace</div>
                        </div>
                        <div class="choose-model" onclick="setModel('Megane','1599')">
                            <div class="choose-model-btn">Megane</div>
                        </div>
                        <div class="choose-model" onclick="setModel('Scenic','1604')">
                            <div class="choose-model-btn">Scenic</div>
                        </div>
                    </div>
                    <div class="adv-main main-width model_choose_show model_choose_show_second" id="model_list">
                        <div class="choose-model"  onclick="setModel('208','1476')">
                            <div class="choose-model-btn">208</div>
                        </div>
                        <div class="choose-model" onclick="setModel('308','1483')">
                            <div class="choose-model-btn">308</div>
                        </div>
                        <div class="choose-model" onclick="setModel('2008','1471')">
                            <div class="choose-model-btn">2008</div>
                        </div>
                        <div class="choose-model" onclick="setModel('3008','1477')">
                            <div class="choose-model-btn">3008</div>
                        </div>
                        <div class="choose-model" onclick="setModel('5008','1491')">
                            <div class="choose-model-btn">5008</div>
                        </div>
                    </div>
                    <div class="adv-main main-width model_choose_show model_choose_show_third" id="model_list">
                        <div class="choose-model"  onclick="setModel('C3','354')">
                            <div class="choose-model-btn">C3</div>
                        </div>
                        <div class="choose-model" onclick="setModel('C4','358')">
                            <div class="choose-model-btn">C4</div>
                        </div>
                        <div class="choose-model" onclick="setModel('C4 Picasso','359')">
                            <div class="choose-model-btn">C4 Picasso</div>
                        </div>
                        <div class="choose-model" onclick="setModel('C5','360')">
                            <div class="choose-model-btn">C5</div>
                        </div>
                        <div class="choose-model" onclick="setModel('Jumpy','2221')">
                            <div class="choose-model-btn">Jumpy</div>
                        </div>
                    </div>
                    <div class="adv-main main-width model_choose_show model_choose_show_fourth" id="model_list">
                        <div class="choose-model" onclick="setModel('Golf','1908')">
                            <div class="choose-model-btn">Golf</div>
                        </div>
                        <div class="choose-model" onclick="setModel('Passat','1917')">
                            <div class="choose-model-btn">Passat</div>
                        </div>
                        <div class="choose-model" onclick="setModel('Polo','1921')">
                            <div class="choose-model-btn">Polo</div>
                        </div>
                        <div class="choose-model" onclick="setModel('T-Roc','22445')">
                            <div class="choose-model-btn">T-Roc</div>
                        </div>
                        <div class="choose-model" onclick="setModel('Tiguan','1927')">
                            <div class="choose-model-btn">Tiguan</div>
                        </div>
                    </div>
                    <div class="adv-main main-width model_choose_show model_choose_show_fifth" id="model_list">
                        <div class="choose-model" onclick="setModel('Model 3','22420')">
                            <div class="choose-model-btn">Model 3</div>
                        </div>
                        <div class="choose-model" onclick="setModel('Model S','1782')">
                            <div class="choose-model-btn">Model S</div>
                        </div>
                        <div class="choose-model" onclick="setModel('Model X','19396')">
                            <div class="choose-model-btn">Model X</div>
                        </div>
                        <div class="choose-model" onclick="setModel('Model Y','22667')">
                            <div class="choose-model-btn">Model Y</div>
                        </div>
                    </div>
                    <div class="adv-main main-width model_choose_show model_choose_show_sixth" id="model_list">
                        <div class="choose-model" onclick="setModel('A-Class','20342')">
                            <div class="choose-model-btn">A-Class</div>
                        </div>
                        <div class="choose-model" onclick="setModel('B-Class','20343')">
                            <div class="choose-model-btn">B-Class</div>
                        </div>
                        <div class="choose-model" onclick="setModel('C-Class','20349')">
                            <div class="choose-model-btn">C-Class</div>
                        </div>
                        <div class="choose-model" onclick="setModel('E-Class','20350')">
                            <div class="choose-model-btn">E-Class</div>
                        </div>
                        <div class="choose-model" onclick="setModel('GL-Class','20354')">
                            <div class="choose-model-btn">GL-Class</div>
                        </div>
                        <div class="choose-model" onclick="setModel('V-Class','20370')">
                            <div class="choose-model-btn">V-Class</div>
                        </div>
                    </div>
                    <div class="adv-main main-width model_choose_show model_choose_show_seventh" id="model_list">
                        <div class="choose-model" onclick="setModel('A1','84')">
                            <div class="choose-model-btn">A1</div>
                        </div>
                        <div class="choose-model" onclick="setModel('A3','82')">
                            <div class="choose-model-btn">A3</div>
                        </div>
                        <div class="choose-model" onclick="setModel('A4','84')">
                            <div class="choose-model-btn">A4</div>
                        </div>
                        <div class="choose-model" onclick="setModel('A6','87')">
                            <div class="choose-model-btn">A6</div>
                        </div>
                        <div class="choose-model" onclick="setModel('Q3','93')">
                            <div class="choose-model-btn">Q3</div>
                        </div>
                        <div class="choose-model" onclick="setModel('Q5','94')">
                            <div class="choose-model-btn">Q5</div>
                        </div>
                    </div>
                    <div class="adv-main main-width model_choose_show model_choose_show_eighth" id="model_list">
                        <div class="choose-model" onclick="setModel('1 Series','19772')">
                            <div class="choose-model-btn">1 Series</div>
                        </div>
                        <div class="choose-model" onclick="setModel('3 Series','19775')">
                            <div class="choose-model-btn">3 Series</div>
                        </div>
                        <div class="choose-model" onclick="setModel('5 Series','19777')">
                            <div class="choose-model-btn">5 Series</div>
                        </div>
                        <div class="choose-model" onclick="setModel('X1','152')">
                            <div class="choose-model-btn">X1</div>
                        </div>
                        <div class="choose-model" onclick="setModel('X3','153')">
                            <div class="choose-model-btn">X3</div>
                        </div>
                        <div class="choose-model" onclick="setModel('X5','155')">
                            <div class="choose-model-btn">X5</div>
                        </div>
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
        if(carbrand=="Renault"){
            document.getElementsByClassName("model_choose_show_first")[0].style.display="flex";
        }
        else if(carbrand=="Peugeot"){
            document.getElementsByClassName("model_choose_show_second")[0].style.display="flex";
            
        }
        else if(carbrand=="Citroen"){
            document.getElementsByClassName("model_choose_show_third")[0].style.display="flex";
            
        }
        else if(carbrand=="Volkswagen"){
            document.getElementsByClassName("model_choose_show_fourth")[0].style.display="flex";
            
        }
        else if(carbrand=="Tesla"){
            document.getElementsByClassName("model_choose_show_fifth")[0].style.display="flex";
            
        }
        else if(carbrand=="Mercedes-Benz"){
            document.getElementsByClassName("model_choose_show_sixth")[0].style.display="flex";
            
        }
        else if(carbrand=="Audi"){
            document.getElementsByClassName("model_choose_show_seventh")[0].style.display="flex";
            
        }
        else if(carbrand=="BMW"){
            document.getElementsByClassName("model_choose_show_eighth")[0].style.display="flex";
            
        }
        // $.ajax({
        //     url: "/retrieve-car-model-data",
        //     type: 'GET',
        //     data: { value1: brand_id },
        //     success: function (result) {
        //         const car_model = document.getElementById("model_list");
        //         car_model.innerHTML = ''
        //         result.slice(-5).forEach(element => {
        //             const modellistdiv = document.createElement("div");
        //             modellistdiv.textContent = element.name;
        //             car_model.appendChild(modellistdiv)
        //             modellistdiv.addEventListener('click', () => {
        //                 const input = document.getElementById('car-model');
        //                 localStorage.setItem('car_model', element.name);
        //                 localStorage.setItem('car_model_id', element.id_car_model)
        //                 input.value = element.name;
        //                 // dropdownpan.style.display = "none"
        //                 document.getElementById("carmodelpan").style.display = "none"
        //                 document.getElementById("cross").style.display = "flex"
        //                 document.getElementById("disablefooter").classList.remove("disabled-container-footer");
        //                 document.getElementById("disablebuton").classList.remove("disabled-button");
        //                 document.getElementById("disablebuton").addEventListener('click', () => {
        //                     location.href = "/formulaire/vehicle-version"
        //                 })
        //             });
        //         });
                // result.slice(-5).forEach(element => {
                //     car_model.innerHTML += `
                //         <div class="choose-model" >
                //             <div class="choose-model-btn">${element.name}</div>
                //         </div>
                //     `
                // })
        //     },
        //     error: function (error) {
        //     }
        // });
    </script>
</body>

</html>