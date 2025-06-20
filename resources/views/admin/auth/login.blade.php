@extends ('partials.layout')

@section('title', 'Admin | Login' )

<style>
    /* Reset and base styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Arial', sans-serif;
        list-style: none;
    }

    body {
        background-color: #fff;
        min-height: 100vh;
    }

    /* Container for centering content */
    .container {
        padding: 5px;
        min-height: 300px;

        width: 99vw;
        height: 98vh;
       
    }

    /* Main content box */
    .content {
        width: 50%;
        justify-self: center;
        margin: 8px 180px;
        padding: 10px;
        line-height: 1.5; /* Adjusted for better readability */
    }

    /* Centered heading */
    h2 {
        text-align: center;
        margin-bottom: 15px;
    }

    /* Footer for buttons */
    .footer {
        width: 100%;
        display: flex;
        justify-content: flex-end;
        gap: 8px;
        margin-top: 10px;
    }

    /* Input styles */
    input {
        width: 100%;
        height: 30px;
        margin: 8px 0;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    label {
        margin-left: 5px;
        font-weight: 500;
    }

    /* Button styles */
    .btn_login {
        background: rgb(56, 115, 182);
        color: #fff;
        width: 100%;
        max-width: 120px;
        height: 30px;
        font-size: 18px;
        font-family: 'Times New Roman', Times, serif;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .btn_login:hover {
        background: rgb(45, 90, 150);
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

    /* Error message styling */
    .error {
        padding: 8px;
        border: 2px solid red;
        border-radius: 4px;
        margin-bottom: 10px;
        background: rgba(255, 0, 0, 0.1);
    }

    #error_txt {
        color: red;
        margin: 0;
    }

    /* Login box styling */
    .loginbox {
        border: 1px solid gray;
        border-radius: 8px;
        padding: 15px;
        background: #f9f9f9;
    }

    /* Navbar styles */
    .navbar {
        width: 100%;
        padding: 25px 9%;
        background: rgb(246, 247, 244);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar .logo {
        font-size: 30px;
        font-weight: 700;
    }

    .navbar ul {
        display: flex;
        justify-content: flex-end;
        gap: 20px;
        width: 100%;
    }

    .navbar ul li a {
        color: #000;
        font-size: 18px;
        font-weight: 500;
        transition: color 0.5s;
    }

    .navbar ul li a:hover {
        color: blue;
    }

    /* Responsive adjustments */
    @media (max-width: 600px) {
        .content {
            margin: 8px 10px;
            padding: 10px;
        }

        .navbar {
            padding: 15px 5%;
            flex-direction: column;
            gap: 15px;
        }

        .navbar ul {
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .footer {
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .btn_login,
        .btn_cancel {
            max-width: 100%;
        }
        .flex
        {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    }
</style>
@section('content')
<div class="content">
    <div class="flex">
        <h2>Welcome Back!</h2>

        @if ($errors->any())
        <div class="error">
            <h2><strong>Whoops!</strong></h2>
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                    <p id="error_txt">{{ $error }}</p>
                </li>
                @endforeach
                <li></li>
            </ul>
        </div>
        @endif
        <div class="loginbox">
            <form class="login" method="POST" action="/login">
                @csrf
                <label for="email" id="email">Email:</label>
                <input type="text" name="email" placeholder="Enter Email">
                <label for="password" id="password">Password:</label>
                <input type="password" name="password" placeholder="Enter Password">
                <div class="footer">
                    <button class="btn_cancel"><a href="/">Cancel</a></button>
                    <button class="btn_login" type="submit">Login</button>
                    <a href="/register" class="btn_cancel">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection