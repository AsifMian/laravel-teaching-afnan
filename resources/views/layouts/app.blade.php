<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jituchauhan.com/physiotherapy/physiotherapy-blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2023 09:37:14 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="keywords"
        content="physio, physiotherapy, physiotherapist, sports injuries,HTML5,CSS3,Responsive,HTML Template,Accupuncture,massage,pilate,occupational Health" />
    <meta name="description"
        content="Physio plus is clean and simple website template that have a feature like each service have a detail page and Terapist trainer page, location page and also more feature.">
    <title>Physio Plus | Physiotherapy Responsive Website Template</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Template Style.css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Template slider css -->
    <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <!-- icon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/flaticon.css')}}">
    <!-- Template Font -->
    <link href="https://fonts.googleapis.com/css?family=Adamina" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
    @include('include.header')
        @yield('content')
    @include('include.footer')
</body>

</html>
