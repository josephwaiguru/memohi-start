<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/formulaire-header.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{asset('assets/js/formulaire.js')}}"></script>
</head>

<body>
    <div class="container">
        <x-formulaire_header />
        <div class="progress">
            <div style="height:8px;width:80%;background-color:#70efdd;transition:2s" class="progress-bar"></div>
        </div>
        <main class="main-body">
            <div class="back-button" onclick="toUserInformation()">
                <span class="arrow">

                    <i class="fa fa-angle-left"></i>
                </span>
                <span class="back">Back</span>
            </div>
            <div class="main-container">
                <div class="second" id="second">
                    <div class="main-container-header summary-conainer-header" style="padding-top:35px">
                        <span>Summary</span>
                    </div>
                </div>
                <div class="summary-information">
                    <div class="version-information" style="margin-bottom:20px;margin-top:20px">
                        <span class="status">Username</span>
                        <span class="value" id="name">Feburary 2019</span>
                    </div>
                    <div class="version-information" style="margin-bottom:20px">
                        <span class="status">Email</span>
                        <span class="value" id="email">Feburary 2019</span>
                    </div>
                    <div class="version-information" style="margin-bottom:20px">
                        <span class="status">PhoneNumber</span>
                        <span class="value" id="number">Feburary 2019</span>
                    </div>
                    <div class="version-information" style="margin-bottom:20px;">
                        <span class="status">Brand</span>
                        <span class="value" id="brandvalue">PEUGEOT</span>
                    </div>
                    <div class="version-information" style="margin-bottom:20px">
                        <span class="status">Model</span>
                        <span class="value" id="modelvalue" style="/*max-width: 150px;*/">208</span>
                    </div>
                    <div class="version-information" style="margin-bottom:20px">
                        <span class="status">Version</span>
                        <span class="value" id="generationvalue">1.2 PURE TECH8 68 ACTIVE (PA:4Cv)</span>
                    </div>
                    <div class="version-information" style="margin-bottom:20px">
                        <span class="status">Registration Date</span>
                        <span class="value" id="date">Feburary 2019</span>
                    </div>
                    <div class="version-information"style="margin-bottom:20px">
                        <span class="status">Energy</span>
                        <span class="value" id="energy">Feburary 2019</span>
                    </div>
                    <div class="version-information"style="margin-bottom:20px">
                        <span class="status">Range</span>
                        <span class="value" id="range">Feburary 2019</span>
                    </div>
                </div>
                <div class="main-container-footer" style="margin-top:40px !important">
                    <div class="next-button" onclick="toCongradulation()">
                        Next
                    </div>
                </div>
            </div>
    </div>
    </main>
    <x-formulaire_footer />
    <script>
        const car_brand = localStorage.getItem("car_brand");
        const car_model = localStorage.getItem("car_model");
        const car_generation = localStorage.getItem("car_generation");
        const user_fullname = localStorage.getItem("user_fullname");
        const user_email = localStorage.getItem("user_email");
        const user_phonenumber = localStorage.getItem("user_phonenumber");
        const car_energy = localStorage.getItem("car_energy");
        const car_range = localStorage.getItem("car_range");
        const dateStr = new Date;
        const date = new Date(dateStr);
        const options = { year: 'numeric', month: 'long' };
        const formattedDate = date.toLocaleDateString('en-US', options);
        localStorage.setItem("registration_date", dateStr)
        document.getElementById("brandvalue").innerHTML = car_brand;
        document.getElementById("modelvalue").innerHTML = car_model;
        document.getElementById("generationvalue").innerHTML = car_generation;
        document.getElementById("date").innerHTML = formattedDate;
        document.getElementById("name").innerHTML = user_fullname;
        document.getElementById("email").innerHTML = user_email;
        document.getElementById("number").innerHTML = user_phonenumber;
        document.getElementById("energy").innerHTML = car_energy;
        document.getElementById("range").innerHTML = car_range;
    </script>
</body>

</html>