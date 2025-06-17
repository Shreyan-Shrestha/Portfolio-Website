@extends('partials.layout')

<link rel="stylesheet" href="{{asset('css/style.css')}}">
@section('title', 'Portfolio | Home')
@section('content')
    <nav class="navbar">
        <a href="#" class="logo">Portfolio</a>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="about.html">Projects</a></li>
            <button><a href="/contact">Contact</a></li></button>
            <li><a href="services.html">Resume</a></li>
        </ul>
    </nav>
    <section class="home">
        <div class="home-img">
                <div class="img-box">
                    <div class="img-item">
                        <img src="profile.png" alt="">
                    </div>

                </div>
   
            </div>
            
        <div class="home-info">
            <h1>Hello, We all are Developer</h2>
            <h2>Developer</h2>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quae ad aut et incidunt quibusdam enim eaque tenetur eos autem cum voluptas soluta odit, laudantium vero porro ea illum modi.</P>


        </div>

        <div class="Projects">
            <h2>Featured Projects</h2>
            <div class="project-box">
                <div class="project-item">
                    <img src="project1.png" alt="">
                    <h3>Project 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>
                <div class="project-item">
                    <img src="project2.png" alt="">
                    <h3>Project 2</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>
                <div class="project-item">
                    <img src="project3.png" alt="">
                    <h3>Project 3</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>
        </div>

    </section>
@endsection