<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
    @yield('css')

</head>
<body>
    <p>this is master layout</p>

    <section class="container-fluid p-0">
        @yield('content')
        
    </section>

    <script src="{{asset('dist/js/jquery-3.7.0.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap.bundle.min.js')}}"></script>
    @yield('js')

</body>
</html>