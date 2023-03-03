<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>Laravel CRUD</title>



    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --}}

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{asset(" images/favicon.png")}}" />
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset(" css/bootstrap.min.css")}}" />
    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="{{asset(" css/animate.css")}}" />
    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{asset(" css/font-awesome.css")}}" />
    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{asset(" css/themify-icons.css")}}" />
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="{{asset(" css/slick.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset(" css/slick-theme.css")}}">
    <!-- megamenu -->
    <link rel="stylesheet" type="text/css" href="{{asset(" css/megamenu.css")}}">
    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{asset(" css/shortcodes.css")}}" />
    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{asset(" css/main.css")}}" />
    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset(" css/responsive.css")}}" />
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --}}


    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
</head>

<body>
    <div id="app">
    </div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>


    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --}}
    <script src="{{asset(" js/jquery.min.js")}}"></script>
    <script src="{{asset(" js/tether.min.js")}}"></script>
    <script src="{{asset(" js/bootstrap.min.js")}}"></script>
    <script src="{{asset(" js/jquery.easing.js")}}"></script>
    <script src="{{asset(" js/jquery-waypoints.js")}}"></script>
    <script src="{{asset(" js/jquery-validate.js")}}"></script>
    <script src="{{asset(" js/numinate.min.js")}}"></script>
    <script src="{{asset(" js/slick.js")}}"></script>
    <script src="{{asset(" js/price_range_script.js")}}"></script>
    <script src="{{asset(" js/easyzoom.js")}}"></script>
    <script src="{{asset(" js/main.js")}}"></script>
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --}}

</body>

</html>