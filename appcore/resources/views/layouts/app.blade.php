
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="//code.jquery.com/jquery.js"></script>

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
    <div id="app">
        @include('include.nav')
        <main class="py-3">
            <div class="container">
                @include('include.message')
                @include('include.carousel')
                @yield('content')
            </div>
        </main>
        <aside>@include('include.sidebar')</aside>
        @include('pages.test')
    </div>
    @include('include.scripts')
</body>
</html>
