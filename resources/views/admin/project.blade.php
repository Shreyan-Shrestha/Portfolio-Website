@extends('layouts.app')
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: Arial, sans-serif;
        }
        .container{
            display: flex;
            height: 100vh;
        }
        .sidebar{
            width: 300px;
            background-color: #333;
            padding: 20px
            border-right: 1px solid #ccc;
        }
        .sidebar h2{
            margin-buttom: 20px;
        }  
        .profile-info{
            margin-buttom: 20px;
        }  
        .image-box{
            width: 100px;
            height: 50px;
            background-color: #f0f0f0;
            margin-bottom: 10px;
        }
        .nav-links a {
            display: block;
            margin-bottom: 10px;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }
        .nav-links a:hover{
            text-decoration: underline;
        }
        .main-content{
            flex-grow: 1;
            padding: 20px;
        }
    </style>

@section('content')
    <div class="container">
        <aside class="sidebar">
            <h2>Admin Crud<h2>
                <div class="profile-info>
                <div class="image-box"></div>
                <div class="image-box"></div>
                <p>Name</p>
     </div>
         <nav class="nav-links">
         <a href="#">Projects</a>
         <a href="#">About</a>
         <a href="#">Resume</a>
         </nav>
        </aside>

    <main class="main-content">
    <p>Contain will display here.....</p>
@endsection