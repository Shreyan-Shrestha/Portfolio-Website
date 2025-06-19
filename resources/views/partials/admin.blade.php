<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title', 'Portfolio')</title>
        <meta name="description" content="Portfolio Website">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    </body>
</html>
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
                            <a href="/about"><div class="nav_btn"><p class="nav_about">Personal</p></div></a>
                        </li>

                        <li>
                            <a href="/skills"><div class="nav_btn"><p class="nav_skills">Skills</p></div></a>
                        </li>
                        <li>
                            <a href="/qualification"><div class="nav_btn"><p class="nav_quals">Qualifications</p></div></a>
                        </li>
                        <li>
                            <a href="/project"><div class="nav_btn"><p class="nav_projects">Projects</p></div></a>
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