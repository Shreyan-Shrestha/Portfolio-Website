@extends('partials.admin')

@section('title', 'Admin Panel | About')

<style>
    * {
        list-style: none;
    }

    .container {
        display: flex;
        width: 90%;
    }

    .content {
        width: 90%;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .nav_bt:onhover {
        cursor: pointer;
        opacity: 1;
    }

    .admin-info {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
        height: fit-content;
        padding: 2px;
    }

    a {
        text-decoration: none;
        color: inherit;
    }

    .admin-nav {
        width: 10%;
        height: 90vh;
        background-color: #f8f9fa;
        border: 0 2px solid rgb(53, 54, 54);
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .navbar {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        margin-top: 15px;
    }

    .nav_panel {
        color: blue;
        font-size: 18px;
        font-weight: 500;
        transition: .5s;
    }

    .nav_about {
        color: rgb(43, 145, 158);
        font-size: 18px;
        font-weight: 500;
        transition: .5s;
    }

    .nav_return {
        color: rgb(192, 8, 8);
        font-size: 18px;
        font-weight: 500;
        transition: .5s;
    }

    ul {
        display: flex;
        flex-direction: column;
        width: 100%;
        padding: 0;
    }

    .skill-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0;
        margin: 0;
        width: 150px;
    }

    li {
        width: 100%;
    }
    .admin-info{
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
        height: fit-content;
        padding: 2px;
    }

    .btn_add {
        background-color:rgb(49, 137, 189);
        float: right;
        color: white;
        width: 100%;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    .empty-state {
        text-align: center;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .box_about {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .admin-actions {
        width: 100%;
        display: flex;
        justify-content: flex-end;
        margin-bottom: 10px;
    }
</style>

@section('content')
<div class="content">
    <div class="personal-info">
        <h1>Personal Details</h1>
        <p>Here you can view and edit your personal information to be used in filling 'About me' and creating your 'Resume'</p>
        @if ($errors->any())
        <div>
            <strong>Whoops!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                <li></li>
            </ul>
        </div>
        @endif
        <div class="resume-card">
            <div class="box_about">
                <div class="admin-actions">
                    <a href="/addabout"><button class="btn_add">Add</button></a>
                </div>
                <div class="section">
                    @forelse ($abouts as $about)
                    <ul>
                        <li>
                            <div class="img_wrapper">
                                <img src="{{ asset($about['photo']) }}" onerror="this.src='https://placehold.co/400/transparent/4AD/?text=photo';">
                            </div>
                        </li>
                        <li>
                            <div><strong>Name:</strong> {{ $about['name'] }}</div>
                        </li>
                        <li>
                            <div><strong>Email:</strong> {{ $about['email'] }}</div>
                        </li>
                        <li>
                            <div><strong>Phone:</strong> {{ $about['phone'] }}</div>
                        </li>
                        <li>
                            <div><strong>Address:</strong> {{ $about['address'] }}</div>
                        </li>
                        <li>
                            <div><strong>Github link:</strong> {{ $about['github'] }}</div>
                        </li>
                        <li>
                            <div><strong>About in short:</strong> {{ $about['aboutshort'] }}</div>
                        </li>
                        <li>
                            <div><strong>About in long:</strong> {{ $about['aboutlong'] }}</div>
                    </ul>
                    @empty
                    <div class="empty-state">
                        <h3>No Personal Information added yet</h3>
                        <p>Click Add to fill your personal information to get started.</p>
                    </div>
                    @endforelse

                </div>
            </div>
        </div>
    </div>

    @endsection