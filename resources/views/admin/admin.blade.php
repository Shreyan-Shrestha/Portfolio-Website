@extends('partials.admin')

@section('title', 'Admin Dashboard')

<style>
    *{
        list-style: none;
    }

    .nav_bt:onhover{
        cursor: pointer;
        opacity: 1;
    }

    .admin-info {
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
        float: right;
        height: fit-content;
        padding: 5px;
        border: 1px solid #ccc;
    }

    a{
    text-decoration: none;
    color: inherit;
    }
    .admin-nav{
        width: 10%;
        height: 80vh;
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
    .nav_dashboard{
        color:rgb(43, 145, 158);
        font-size: 18px;
        font-weight: 500;
        transition: .5s;
    }
    ul{
        display: flex;
        flex-direction: column;
    }
</style>

@section('content')
    <div class="wrapper">
        <h1>Admin Dashboard</h1>
        <p>Welcome to the admin dashboard. Here you can manage your portfolio.</p>

        <div class="admin-info">
            <div>
                <p>Projects</p>
                
            </div>
            <div>
                <p>Skills</p>
                
            </div>
        </div>
    </div>
@endsection