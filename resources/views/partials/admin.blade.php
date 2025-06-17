!<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@section('title', 'Admin Panel')</title>
        <meta name="description" content="Admin Panel for the Portfolio Website">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div>
            <nav>
                <ul>
                    <li>
                        <a href="/dashboard"><div><p>Dashboard</p></div></a>
                    </li>

                    <li>
                        <a href="/aboutindex"><div><p>About</p></div></a>
                    </li>

                    <li>
                        <a href="/skillindex"><div><p>Skills</p></div></a>
                    </li>
                    <li>
                        <a href="/projectindex"><div><p>Projects</p></div></a>
                    </li>
                </ul>
            </nav>
             @section('content')
        </div>
       
    </body>
</html>