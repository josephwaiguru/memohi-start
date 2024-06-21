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

<body>
    <div class="container">
        <x-formulaire_header />
        <div class="progress">
            <div style="height:100%;width:100%;background-color:#70efdd;transition:2s" class="progress-bar"></div>
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
                        <span class="bold-font">Congratulation!</span>
                    </div>
                    <div class="second-content" style="margin:15px 0 15px 0;text-align:center">You've checked all your
                        information correctly.</div>
                    <div class="second-content" style="margin:0px 0 0px 0;text-align:center">If you want to submit your
                        information, please click the "submit"</div>
                </div>
                <div class="main-container-footer">
                    <div class="next-button" onclick="submit()">
                        Submit
                    </div>
                </div>
            </div>
    </div>
    </main>
    <x-formulaire_footer />
</body>

</html>