@extends('partials.layout')
<style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
  }

  body {
    background-color: white;
    min-height: 100vh;

  }

  a {
    color: black;
    text-decoration: none;
  }

  .log {
    display: flex;
    justify-items: center;
  }

  .nav {
    display: flex;
    justify-content: space-between;
  }

  .navbar {
    width: 100%;
    padding: 25px 9%;
    background: rgb(246, 247, 244);
    display: flex;
    justify-content: space-between;
    align-items: center;

  }

  .navbar .logo {
    font-size: 30px;
    font-weight: 700;
  }

  .navbar ul {
    display: flex;
    justify-content: space-evenly;
    width: 100%;
    gap: 20px
  }

  .navbar ul li {
    list-style: none;
  }

  .navbar ul li a {
    color: black;
    font-size: 18px;
    font-weight: 500;
    transition: .5s;

  }

  .navbar ul li a:hover {
    color: blue;
  }

  .hero {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 60px 125px;
    background: white;
  }

  .profile-photo {
    width: 200px;
    height: auto;
    border-radius: 5px;
    margin-right: 40px;
  }

  .hero-text h1 {
    font-size: 2.5rem;
    margin-bottom: 1px;
  }

  .projects {
    padding: 40px;
    background: white;
  }

  .projects h2 {
    font-size: 20px;
    margin-bottom: 5px;
  }

  .project-cards {
    display: flex;
    justify-content: space-between;
    padding: 30px;
    background-color: rgb(246, 247, 244);
  }

  .card {
    background: white;
    padding: 20px;
    border-radius: 12px;
    width: 300px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
  }

  .card img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 15px;
  }

  .card h3 {
    margin: 0 0 10px;
  }

  footer {
    text-align: center;
    padding: 20px;
    background: rgb(246, 247, 244);
    ;
    font-size: 0.9rem;
    color: #666;
  }

  .hero-text p {
    max-width: 600px;
    margin-bottom: 20px;
  }

  .btn {
    background-color: #c6bafc;
    padding: 10px 20px;
    text-decoration: none;
    color: #333;
    font-weight: bold;
    border-radius: 10px;
  }
</style>
@section('title', 'Portfolio | Home')
@section('content')
<section class="hero">
  <div class="img_wrapper">
    <img src="{{asset($about['photo'])}}" alt="Profile Photo" class="profile-photo" />
  </div>
  <div class="hero-text">
    <h1></h1>
    <h2>{{$about['name']}}</h2>
    <h3>I'm a {{$about['jobtitle']}}</h3>
    <p>{{$about['aboutshort']}}</p>
    <a href="/resume" class="btn">View Resume</a>
    <a href="{{$about['github']}}" target="_blank" rel="noopener noreferrer" class="btn">Github</a>
  </div>
</section>

<section class="projects">
  <h2 class="title">Featured Projects</h2>
  <div class="project-cards">
    @forelse ($projects as $project)
    <div class="card">
      <div class="img_wrapper">
        <img src="{{asset($project['image'])}}" alt="Mobile App" />
      </div>
      <h3>{{$project['name']}}</h3>
      <p>{{$project['description']}}</p>
      </div>
      @empty
      <p>No projects available at the moment.</p>
      
      @endforelse
    
  </div>
</section>
@endsection