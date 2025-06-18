@extends('partials.admin')

@section('title', 'Admin Panel | Skills')

<style>
    *{
        list-style: none;
    }

    .container{
    display: flex;
    width: 90%;
    }
    .content {
    width: 90%;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .nav_bt:onhover{
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

    a{
    text-decoration: none;
    color: inherit;
    }
    .admin-nav{
        width: 10%;
        height: 90vh;
        background-color: #f8f9fa;
        border: 0 2px solid rgb(53, 54, 54);
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .navbar{
        display : flex;
        justify-content: space-evenly;
        align-items: center;
        margin-top: 15px;
    }
    .nav_panel{
        color: blue;
        font-size: 18px;
        font-weight: 500;
        transition: .5s;
    }
    .nav_skills{
        color:rgb(43, 145, 158);
        font-size: 18px;
        font-weight: 500;
        transition: .5s;
    }
    .nav_return{
        color:rgb(192, 8, 8);
        font-size: 18px;
        font-weight: 500;
        transition: .5s;
    }
    ul{
        display: flex;
        flex-direction: column;
        width: 100%;
        padding: 0;
    }
    li{
        width: 100%;
    }
    .btn_add {
        background-color:rgb(25, 106, 172);
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    input{
        height: 30px;
    }
    
    </style>

@section('content')
    <div class="content">
        <h2>Add a new skill</h2>
        <div class="box_skills">
            <div class="admin-actions">
                <form action="/skills" method="POST">
                    @csrf
                    <label for="name">Skill Name:</label>
                    <input type="text" name="name" required>
                    <button type="submit" class="btn_add">Add</button>
                </form>
        </div>
        
    </div>           
@endsection