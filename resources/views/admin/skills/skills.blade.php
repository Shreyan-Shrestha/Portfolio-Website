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
    .skill-item{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0;
        margin: 0;
        width: 150px;
    }
    li{
        width: 100%;
    }
    .btn_add {
        background-color: #28a745;
        float: right;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    .admin-info{
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
        height: fit-content;
        padding: 2px;
    }
    form{
        margin: 0;
    }
    .btn_del{
        background-color: rgb(180, 18, 18);
        padding: 4px;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }
    </style>

@section('content')
    <div class="content">
        <h2>Manage your skills here.</h2>
        <h3>Skills:</h3>
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
        <div class="box_skills">
            <div class="admin-actions">
            <a href="/addskill"><button class="btn_add">Add</button></a>
        </div>

        <div class="admin-info">
            <div class="box_skills">
                <ul class="skills-list">
                @forelse($skills as $skill)
                    <li>
                        <div class="skill-item">
                            <p>{{ $skill->name }}</p>
                            <div>
                            <a href="skilleditview/{{$skill['id']}}"> <button class="btn_edit">Edit</button></a>
                            <form action="/deleteskill/{{ $skill['id'] }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn_del">Delete</button>
                            </form>
                            </div>
                        </div>    
                    </li>                    
                @empty
                    <p>No skills added yet.</p>
                @endforelse
                </ul>
            </div>
        </div>
        </div>
        
    </div>           
@endsection