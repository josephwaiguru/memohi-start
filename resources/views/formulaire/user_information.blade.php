<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/formulaire-header.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{asset('assets/js/formulaire.js')}}"></script>
    <script src="{{asset('assets/js/dist/jquery.min.js')}}"></script>
</head>

<body>
    <div class="container">
        <x-formulaire_header />
        <div class="progress">
            <div style="height:100%;width:90%;background-color:#70efdd;transition:2s" class="progress-bar"></div>
        </div>
        <main class="main-body">
            <div class="back-button" onclick="toSummary()">
                <span class="arrow">
                    <i class="fa fa-angle-left"></i>
                </span>
                <span class="back">Back</span>
            </div>
            <div class="main-container">
                <div class="second" id="second">
                    <div class="main-container-header" style="padding-top:35px">
                        <span>Check</span>
                        <span class="bold-font">account</span>
                    </div>
                </div>
                <div class="user-info">
                    <div class="label-ta">
                        <label for="name">Full Name:</label>
                    </div>
                    <div class="input-tag">
                        <input id="name" placeholder="Enter Full Name" onchange="setFullName()" required>
                    </div>
                </div>
                <div class="user-info">
                    <div class="label-ta">
                        <label for="email">Email:</label>
                        <div id="error"></div>
                    </div>
                    <div class="input-tag">
                        <input id="email" name="email" type="email" placeholder="Enter Email" onchange="setEmail()"
                            required>
                    </div>
                </div>
                <div class="user-info">
                    <div class="label-ta">
                        <label for="phonenumber">Phone Number:</label>
                    </div>
                    <div class="input-tag">
                        <input id="phonenumber" placeholder="Enter Phone number" onchange="setPhoneNumber()" required>
                    </div>
                </div>
                <div class="main-container-footer disabled-container-footer">
                    <div class="next-button" onclick="toCongradulation()">
                        Next
                    </div>
                </div>
            </div>
        </main>
        <x-formulaire_footer />
</body>

</html>