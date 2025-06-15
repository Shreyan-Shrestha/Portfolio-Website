<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>@yield('title', '')</title>
</head>
<body>
    <header></header>
    <main>
        @yield('content')
    </main>
    <footer>
        &copy; {{ date('Y') }}
    </footer>
</body>
</html>
