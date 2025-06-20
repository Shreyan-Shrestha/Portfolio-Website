@extends('partials.admin')
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

    .admin-info {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
        height: fit-content;
        padding: 2px;
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

    .qual_form {
        max-width: 500px;
        margin: 20px auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
    }

    .qual_form label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #333;
    }

    .qual_form input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 14px;
    }

    .qual_form input[type="text"]:focus {
        outline: none;
        border-color: #4CAF50;
        box-shadow: 0 0 5px rgba(76, 175, 80, 0.3);
    }

    .qual_form input[type="text"]::placeholder {
        color: #999;
    }

    .buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .btn_cancel,
    .btn_submit {
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s;
    }

    .btn_cancel {
        background-color: #f44336;
        color: white;
    }

    .btn_cancel a {
        color: white;
        text-decoration: none;
    }

    .btn_cancel:hover {
        background-color: #d32f2f;
    }

    .btn_submit {
        background-color:rgb(57, 128, 196);
        color: white;
    }

    .btn_submit:hover {
        background-color: #45a049;
    }
</style>



@section('title', 'Admin Panel | Add Qualification')

@section('content')
<div class="content">
    <div class="wrapper">

        <div class=h2>
            <h2>Add an Educational info:</h2>
        </div>
        <div>
            @if ($errors->any())
            <strong>Whoops!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                <li></li>
            </ul>
            @endif
        </div>
        <div class="form-container">
            <form method="Post" action="/qualedit/{id}">
                @csrf
                @method("PUT")
                <input value="{{ $quals['id'] }}" name="id" hidden>
                <div class="qual_form">
                    <label for="institute-detail"><b>Institute Name and Address</b></label>
                    <input type="text" value="{{ $quals['institute-detail'] }}" name="institute-detail" required>

                    <label for="email"><b>Degree or Level</b></label>
                    <input type="text" value="{{ $quals['level'] }}" name="level" required>

                    <label for="marks"><b>Marks or CGPA obtained</b></label>
                    <input type="text" value="{{ $quals['marks'] }}" name="marks" required>

                    <div class="btn_group">
                        <button class="btn_cancel"><a href="/qualification">Cancel</a></button>
                        <button class="btn_submit" type="submit">Submit</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection