@extends('partials.admin')

@section('title', 'Admin Panel | Skills')

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

    .nav_skills {
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

    li {
        width: 100%;
    }

    .btn_add {
        background-color: rgb(25, 106, 172);
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    input {
        height: 30px;
    }
    .cancel{
            margin-right: 4px;
            background: rgb(150, 41, 41);
            color: white;
        }
</style>

@section('content')
<div class="content">
    <h2>Edit skill</h2>
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

    <form class="form" method="POST" action="/qualedit/{id}">
        @csrf
        @method("PUT")
        <input value="{{ $skill['id'] }}" name="id" hidden>
        <div class="box_skills">
            <label for="name">Skill:</label>
            <input type="text" name="name" required value="{{ $skill['name'] }}">
        </div>
        <div class="footer">
            <a href="/skills"><button class="cancel" type="button">Cancel</button></a>
            <button class="btn_add" type="submit">Change</button>
        </div>
    </form>
</div>
@endsection