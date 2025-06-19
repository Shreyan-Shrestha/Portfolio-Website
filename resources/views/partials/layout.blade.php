<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
</head>
<body>
    <main class="container">
        <header class="header">
            <nav class="navbar">
      <div class="log">
        <a href="/" class="logo">Portfolio</a>
      </div>

      <div class="nav">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/resume">Resume</a></li>
        </ul>

      </div>
    </nav>
        </header>
        
        @yield('content')
    </main>
</body>
</html>