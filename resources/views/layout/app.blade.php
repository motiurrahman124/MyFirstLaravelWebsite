<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:400;600;700&display=swap" rel="stylesheet">
<body>
    @include('layout.menu')
   


    @yield('content')


    @include('layout.footer')


<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/jquery-3.4.1.slim.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
</body>
</html>