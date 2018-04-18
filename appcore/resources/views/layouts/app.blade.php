
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="//code.jquery.com/jquery.js"></script>

<script>
    
// preloader
function setDimensions(){
var windowsHeight = $(window).height();
$(".preloader").css("height", windowsHeight + "px");
}

$(window).resize(function() {
setDimensions();
});

// Makes sure the whole site is loaded
$(window).load(function() {
// Will first fade out the loading animation
$(".loader").fadeOut("slow");
// Will fade out the whole DIV that covers the website
$(".preloader").delay(1000).fadeOut("slow");
// Will fade out the whole DIV that covers the website

})
</script>
    <!-- Scripts -->
    <script src="js/owl.carousel.min.js"></script>
 @include('include.startscripts')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">

     <!-- Set custom sheet passed by session for different content views -->
    @if(session('style'))
        <link href="{{session('style')}}.css" rel="stylesheet">
    @endif
   
</head>
<body>
<div class="preloader">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="loader">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</div>
    <div id="app">
        @include('include.nav')
        <main>
        @include('include.message')
            <div class="container">
            @yield('content')
            </div>   
        </main>
        @include('include.getquote')
        @include('include.footer2')
 
    </div>

    @include('include.scripts')
</body>
</html>
