@extends('partials.admin')

@section('title', 'Admin Dashboard')

<style>
    *{
        list-style: none;
    }

    .container{
    display: flex;
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

    .btn_cancel {
        background: rgb(158, 46, 38);
        color: #fff;
        width: 100%;
        max-width: 120px;
        height: 30px;
        font-size: 18px;
        font-family: 'Times New Roman', Times, serif;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
        line-height: 30px; /* Vertically center text in anchor */
        transition: background 0.3s;
    }

    .btn_cancel:hover {
        background: rgb(130, 35, 30);
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
    .nav_dashboard{
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
    .box_projects, .box_skills, .box_msgs {
        width: 25%;
        padding: 20px;
        background-color: #f0f0f0;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
     th {
        cursor: pointer;
    }
    table, td, th {  
  border: 1px solid black;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 80%;
  justify-self: center;
}

th, td {
  padding: 15px;
}
.no-data {
        text-align: center;
        padding: 20px;
        color: #666;
}
#git{
        color: blue;
        text-decoration: none;
    }
    img{
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 5px;
    }
    .btn_logout {
        width: 95%;
        display: flex;
        justify-content: flex-end;
        margin-bottom: 20px;
    }
    
</style>

@section('content')
    <div class="content">
        <div class ="btn_logout">
            <form method="POST" action="/logout">
                    @csrf
                    <button class ="btn_cancel" type="submit">Logout</button>
                </form>
        </div>
        
        <h1>Admin Dashboard</h1>
        <h3>Welcome to the Admin Panel. Here you can manage your portfolio.</h3><br><br>

        <div class="admin-info">
            <div class="box_projects">
                <p>Projects</p>
                <p>0</p>
            </div>
            <div class="box_skills">
                <p>Skills</p>
                <p>{{$skillCount}}</p>
            </div>

            <div class="box_msgs">
                <p>Messages Received</p>
                <p>{{$contactCount}}</p>
            </div>
        </div>
        <h2>Projects:</h2>
        <table>
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Image</th>
                                <th>Project Name</th>
                                <th>Skills</th>
                                <th>Description</th>
                                <th>Link to github</th>
                            </tr>
                        </thead>
                        @forelse($projects as $project)
                                        <div class="qual-item">
                                            <tbody>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src=" {{asset($project['image']) }}" alt="Project Image"></td>
                                                <td>{{ $project['name'] }}</td>
                                                <td>{{ $project['skills'] }}</td>
                                                <td>{{ $project['description'] }}</td>
                                                <td>
                                                        <a href="{{ $project['link'] }}" target="_blank" id="git">Go to github</a>
                                                </td>                                                    
                                                </td>
                                            </tbody>
                                        </div>

                                </div>
                            </div>
                        @empty
                         <tbody>
                        <tr>
                            <td colspan="7" class="no-data">No Projects added yet. Go to Projects tab and Add to show here</td>
                        </tr>
                    </tbody>
                    @endforelse
                </table>
        </div>
    </div>
@endsection