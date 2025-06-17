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
    
</style>

@section('content')
    <div class="content">
        <h1>Admin Dashboard</h1>
        <p>Welcome to the admin dashboard. Here you can manage your portfolio.</p><br>

        <div class="admin-info">
            <div class="box_projects">
                <p>Projects</p>
                <p>0</p>
            </div>
            <div class="box_skills">
                <p>Skills</p>
            </div>

            <div class="box_msgs">
                <p>Messages Received</p>
                <p>{{$contactCount}}</p>
            </div>
        </div>
        <h2>Projects:</h2>
        <div class="admin_projects">
            <table>
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Project Name</th>
                            <th>Skills Used in Project</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td colspan="4" class="no-data">No Projects added yet. Go to Projects and add to show here</td>
                            </tr>
                    </tbody>
                </table>
        </div>
    </div>
@endsection