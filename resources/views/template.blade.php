<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" Content="IE-edge">
 <meta name="viewport" content="width-device-width,initial-scale-1">


<title>Siswaku</title>
 <link href="{{asset('bootstrap-3.3.6/css/bootstrap.min.css')}}" rel="stylesheet">
 <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
<div class="container">
@include('navbar')
@yield('main')
@yield('footer')

<script scr="{{ asset('js/jquery-2.2.1.min.js')}}"></script>
<script scr="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
<script scr="{{ asset('bootstrap-3.3.6/js/bootstrap.min.js')}}"></script>
</body