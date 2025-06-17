<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>@section('title', 'Admin Panel')</title>

        <meta name="description" content="Admin Panel for the Portfolio Website">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header class="header">
            <nav>
            <ul class="navbar">
                <div><li>Portfolio</li></div>
                <div><li><a href="/">Home</a></li></div>
                <div><li><a href="/about">About</a></li></div>
                <div><li><a href="/projects">Projects</a></li></div>
                <div><li><a href="/contact">Contact</a></li></div>
                <div><li><a href="/resume">Resume</a></li></div>
            </ul>
            </nav>
        </header>
        <div>
            <nav class="admin-nav">
                <ul>
                    <li>
                        <a href="/admin"><div class="nav_btn"><p class="nav_dashboard">Dashboard</p></div></a>
                    </li>

                    <li>
                        <a href="/aboutindex"><div class="nav_btn"><p class="nav_about">About</p></div></a>
                    </li>

                    <li>
                        <a href="/skillindex"><div class="nav_btn"><p class="nav_skills">Skills</p></div></a>
                    </li>
                    <li>
                        <a href="/projectindex"><div class="nav_btn"><p class="nav_projects">Projects</p></div></a>
                    </li>
                    <li>
                        <a href="/projectindex"><div class="nav_btn"><p class="nav_projects">Resume</p></div></a>
                    </li>
                </ul>
            </nav>
             @section('content')
        </div>
       
    </body>
</html>