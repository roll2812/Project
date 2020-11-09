<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('title')
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
    <link href="{{asset('/Eshopper/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/Eshopper/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/Eshopper/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('/Eshopper/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('/Eshopper/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/Eshopper/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('/Eshopper/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('/home/home.css')}}" rel="stylesheet">
    @yield('css')
    </head>
    <body>

    @include('components.header')

    @yield('content')

    @include('components.footer')


    <script src="{{asset('/eshopper/js/jquery.min.js')}}"></script>
    <script src="{{asset('/eshopper/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/eshopper/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('/eshopper/js/price-range.js')}}"></script>
    <script src="{{asset('/eshopper/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('/eshopper/js/main.js')}}"></script>
    <script src="{{asset('/sweetalert2/sweetalert2.js')}}"></script>
    <script src="{{asset('home/home.js')}}"></script>
    @yield('js')
    </body>
</html>
