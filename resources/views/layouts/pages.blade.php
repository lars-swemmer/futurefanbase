<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <title>Future Fanbase - Master Your Online Marketing Campaign</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="shortcut icon" href="{{{ asset('favicon.png') }}}">

  <!-- stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('css/react/compiled/theme.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/react/vendor/animate.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/react/vendor/brankic.css')}}">

  <!-- javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="{{asset('js/react/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/react/theme.js')}}"></script>

  </head>
<body>

@yield('content')

@include('layouts.footer')

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-99739303-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
