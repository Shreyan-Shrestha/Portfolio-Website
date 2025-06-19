<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'Admin Panel')</title>
        <meta name="description" content="Admin Panel for the Portfolio Website">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
                <nav class="admin-nav">
                    <ul>
                        <li>
                            <div class="nav_btn"><p class="nav_panel">Admin Panel</p></div>
                        </li>
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
                            <a href="/resumeadmin"><div class="nav_btn"><p class="nav_resume">Resume</p></div></a>
                        </li>
                        <li>
                            <a href="/viewcontact"><div class="nav_btn"><p class="nav_messages">Messages</p></div></a>
                        </li>
                        <br><br><br>
                        <li>
                            <a href="/"><div class="nav_btn"><p class="nav_return">< Return</p></div></a>
                        </li>
                    </ul>
                </nav>
       
            @yield('content')
       </div>
    </body>
</html>