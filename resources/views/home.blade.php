<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="#" class="logo">Portfolio</a>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="about.html">Projects</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="services.html">Resume</a></li>
        </ul>
    </nav>
    <section class="home">
        <div class="home-info">
            <div class="image">
                <img src="" alt="">
            </div>
            <h2>Hello, We all are Developer</h2>
            <h2>Developer</h2>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quae ad aut et incidunt quibusdam enim eaque tenetur eos autem cum voluptas soluta odit, laudantium vero porro ea illum modi.</P>


        </div>

    </section>
    
</body>
</html>
@endif