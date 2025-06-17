<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>@yield('title', 'Admin Panel')</title>

        <meta name="description" content="Admin Panel for the Portfolio Website">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
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
                    <li>
                        <a href="/viewcontact"><div class="nav_btn"><p class="nav_contacts">Messages</p></div></a>
                    </li>
                </ul>
            </nav>
        </div>
       
       <div class="container">
            @yield('content')
       </div>
    </body>
</html>