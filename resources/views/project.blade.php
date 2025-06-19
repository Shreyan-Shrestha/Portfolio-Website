@extends('partials.layout')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

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
    </style>

    @section('title', 'My Projects')
<body class="bg-gray-100">
@section('content')
<div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-8">My Projects</h1>
        <div class="space-y-6">
            @forelse ($projects as $project)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ $project['image'] }}" alt="{{ $project['name'] }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold mb-2"><p>{{ $project['name'] }}</p></h2>
                        <span class="bg-blue-100 text-blue-800 text-sm font-medium px-2.5 py-0.5 rounded">{{ $project['skills'] }}</span>
                        <p class="text-gray-600 mb-4 max-h-96 overflow-y-auto">{{ Str::limit($project['description'], 800) }}</p>
                        
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-600">No projects available.</p>
            @endforelse
        </div>
    </div>
@endsection