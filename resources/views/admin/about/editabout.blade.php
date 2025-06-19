@extends('partials.admin')

@section('title', 'Admin Panel | Edit About')
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
    .nav_quals{
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

    .form-container {
        background-color: #fff;
        max-width: 500px;
        margin: 40px auto;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    form label {
        display: block;
        margin-top: 15px;
        font-weight: bold;
    }

    form input,
    form textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    form button {
        margin: 20px 50px;
        padding: 12px;
        background-color: #2b2bff;
        color: #fff;
        border: none;
        width: auto;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    form button:hover {
        background-color: #1a1a99;
    }
    .btn-group{
        display: flex;
        justify-content: center;
    }

    .btn_cancel {
        background: red;
        color: white;
        margin-right: 2px;
    }
</style>

@section('content')
    <div class="form-container">
        <h2>Resume Form</h2>
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
        <form action="/editabout/1" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input value="{{ $about['id'] }}" name="id" hidden>
            <label for="photo">Profile Photo</label>
            <input type="file" id="photo" name="photo">

            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required value="{{$about['name']}}">

            <label for="jobtitle">Job Title</label>
            <input type="text" id="jobtitle" name="jobtitle" required value="{{$about->jobtitle}}">

            <label for="address">Address</label>
            <input type="text" id="address" name="address" required value="{{$about->address}}">

            <label for="number">Phone</label>
            <input type="tel" id="phone" name="number" required value="{{$about->number}}">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required value="{{$about->email}}">

            <label for="github">Github Url</label>
            <input type="github" id="github" name="github" required value="{{$about->github}}">

            <label for="aboutshort">About in Short(max. 100 characters)</label>
            <input type="text" id="about-short" name="aboutshort" maxlength="100" required value="{{$about->aboutshort}}">

            <label for="aboutlong">About in detail(upto 800 characters)</label>
            <input type="text" id="aboutlong" name="aboutlong" maxlength="800" rows="4" required value="{{$about->aboutlong}}">

            <div class="btn-group">
                <a href="/about"><button class="btn_cancel"> Back</button></a>
                <button type="submit" class="btn_add">Submit</button>
            </div>
        </form>
    </div>
@endsection