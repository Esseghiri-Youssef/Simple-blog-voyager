<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    @yield('stylesheet')
    <title>MonBlog</title>
</head>
<body>
    @include('partials.navbar')
    <div class="container">
    @yield('content')
    </div>   

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    @yield('javascript')
</body>
</html>