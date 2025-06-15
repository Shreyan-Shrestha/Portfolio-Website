@extends('partials.layout')

<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"> -->
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">

@section('title', 'Portfolio | Home')
@section('content')
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
@endsection