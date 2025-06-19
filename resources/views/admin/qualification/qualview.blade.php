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
</style>

@section('content')
    <div class="content">
        <h2>Manage your Education Details here.</h2>
        <h3>Qualifications:</h3>
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
                <a href="/addqualification"><button class="btn_add">Add</button></a>
            </div>

            <div class="admin-info">
                <div class="box_quals">
                    <table>
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Institute Name / Address</th>
                                <th>Level / Degree</th>
                                <th>Percentage / CGPA</th>
                            </tr>
                        </thead>
                        @forelse($qualifications as $quals)
                                        <div class="qual-item">
                                            <tbody>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $quals['institute-detail'] }}</td>
                                                <td>{{ $quals['level'] }}</td>
                                                <td>{{ $quals['marks'] }}</td>
                                                <td class="td_btns">
                                                    <div class="td_btns">
                                                        <div>
                                                            <a href="/qualeditview/{{$quals['id']}}"> <button
                                                                    class="btn_edit">Edit</button></a>
                                                        </div>
                                                        <div>
                                                            <form method="POST" action="/deletequal/{{ $quals['id'] }}">
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
                <table>
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Institute Name / Address</th>
                            <th>Level / Degree</th>
                            <th>Percentage / CGPA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4" class="no-data">No Education details added yet. Go to Qualification tab and
                                click Add to
                                show here</td>
                        </tr>
                    </tbody>
                </table>
            @endforelse
            </table>
        </div>
    </div>
    </div>

    </div>
@endsection