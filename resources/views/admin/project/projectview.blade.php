@extends('partials.admin')

@section('title', 'Admin Panel | Projects')

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

    .nav_quals {
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
        float: right;
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

    form {
        margin: 0;
    }

    .btn_del {
        background-color: rgb(180, 18, 18);
        padding: 4px;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    th {
        cursor: pointer;
    }

    table,
    td,
    th {
        border: 1px solid #ddd;
        text-align: left;
    }

    table {
        border-collapse: collapse;
        width: 90%;
        justify-self: center;
    }

    th,
    td {
        padding: 15px;
    }

    .no-data {
        text-align: center;
        padding: 20px;
        color: #666;
    }

    .admin-info {
        display: flex;
        justify-content: center;
    }

    .box_quals {
        justify-self: center;
        width: 100%;
    }
    td .td_btn{
        width: auto;
        display: flex;
        justify-content: space-between;
    }
     .admin-actions{
        margin-bottom: 10px;
        height: 50px;
        width: 100%;
    }
    .no-data {
        text-align: center;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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
</style>

@section('content')
    <div class="content">
        <h2>Manage your Project Details here.</h2>
        <h3>Projects:</h3>
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
        <div class="box_quals">
            <div class="admin-actions">
                <a href="/addproject"><button class="btn_add">Add</button></a>
            </div>

            <div class="admin-info">
                <div class="box_quals">
                    <table>
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Image</th>
                                <th>Project Name</th>
                                <th>Skills</th>
                                <th>Description</th>
                                <th>Link to github</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @forelse($projects as $project)
                                        <div class="qual-item">
                                            <tbody>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src=" {{asset($project['image']) }}" onerror="https://placehold.co/400.png"></td>
                                                <td>{{ $project['name'] }}</td>
                                                <td>{{ $project['skills'] }}</td>
                                                <td>{{ $project['description'] }}</td>
                                                <td>
                                                        <a href="{{ $project['link'] }}" target="_blank" id="git">Go to github</a>
                                                </td>    
                                                <td class="td_btns">
                                                    <div class="td_btns">
                                                        <div>
                                                            <a href="/projecteditview/{{$project['id']}}"> <button
                                                                    class="btn_edit">Edit</button></a>
                                                        </div>
                                                        <div>
                                                            <form method="POST" action="/deleteproject/{{ $project['id'] }}">
                                                                @csrf
                                                                @method("DELETE")
                                                                <button class="btn-del"
                                                                    onclick="return confirm('Do you really want to delete?')"
                                                                    type="submit">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
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
    </div>

    </div>
@endsection