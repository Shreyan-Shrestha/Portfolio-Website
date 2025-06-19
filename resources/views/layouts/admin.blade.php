<!DOCTYPE html>
<html>
<head>
    <title>Admin - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-4">
        <h1>Admin Panel</h1>
        <nav>
            <a href="{{ route('admin.dashboard') }}">Dashboard</a> |
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               Logout
            </a>
        </nav>
        <form id="logout-form" method="POST" action="{{ route('logout') }}">
            @csrf
        </form>
        <hr>
        @yield('content')
    </div>
</body>
</html>
