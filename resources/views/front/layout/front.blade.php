<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{  env('APP_NAME') }} | @yield('title','Home')</title>
    <link rel="icon" href="{{ asset('assets/front/images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
    @yield('pageCss')
</head>

<body>


    @yield('content')

    <script>
        var baseUrl = '{{ url("/") }}';
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/alert.js') }}"></script>
  
    @if(session()->has('success'))
    <script type="text/javascript">
        js_success("{{ session('success') }}")
    </script>
    @endif
    @if(session()->has('error'))
    <script type="text/javascript">
        js_error("{{ session('error') }}")
    </script>
    @endif
    @yield('pageJs')
</body>

</html>