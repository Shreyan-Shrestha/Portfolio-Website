<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"> -->
     <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
     
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
</head>
<body>
    <main class="container">
        @yield('content')
    </main>
</body>
</html>