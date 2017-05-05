<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="shortcut icon" href="{{ asset('/favicon.png') }}">
        <title>Future Fanbase - Master Your Online Marketing Campaign</title>
        <meta name="description" content="Master your online marketing campaign">
        <meta name="keywords" content="Future, Fanbase">

        {{-- <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,700,600|Roboto:100,300,400,500" rel="stylesheet" type="text/css"> --}}

        @include('layouts.styles')

    </head>
    <body>
        <div id="loading"></div>
        <div id="left"></div>
        <div id="right"></div>

        <div class="wrapper">
            @include('layouts.nav')

            <div class="main">
                @yield('content')
                @include('layouts.footer')
            </div>
        </div><!-- Wrapper -->

        @include('layouts.scripts')
    </body>
</html>
