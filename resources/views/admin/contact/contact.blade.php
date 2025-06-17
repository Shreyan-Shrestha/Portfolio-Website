@extends('partials.layout')
    <style>
body {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  width: 100%;
  padding: 0 10px;
}
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
    list-style: none;
}
a{
    text-decoration: none;
    color: inherit;
}
body {
    background-color: #f0f0f0;
    color: #333;
    line-height: 1.6;
}
.a{
    color: #000;
    text-decoration: none;
}
.navbar{
    position: fixed;
    top:0;
    left: 0;
    width: 100%;
    padding: 25px 9%;
    background-color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
    
}
.navbar .logo {
    font-size: 30px;
    font-weight: 700;
}
.navbar ul {
    display: flex;

}
.navbar ul li{
    list-style: none;
    margin-left: 35px;
}
.navbar ul li a {
    color: #2b9e2b;
    font-size: 18px;
    font-weight: 500;
    transition: .5s;
}
.navbar ul li a:hover {
    color: #a1c500;
}

.wrapper{
  width: 400px;
  background-color:pink;
  border-radius: 8px;
  padding: 60px;
  border: 1px solid rgba(255, 255, 255, 0.5);
  
}

h2{
  text-align: center;
  color: #333;
  margin-bottom: 10px;
}
form {
  display: flex;
  flex-direction: column;
}
.container {
  position: relative;
  border-bottom: 2px solid #ccc;
  margin: 15px 0;
}


/* Full-width inputs */
input[type=text]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button {
  background-color:rgb(241, 241, 241);
  text-align:justify;
  color: black;
  padding: 14px 40px;
  margin: 8px 0;
  border-radius:10px;
  cursor: pointer;
  width: fit-content;
}

.buttons{
  display: flex;
  justify-content: center;
}

.btn_cancel{
  background:red;
  color: white;
  margin-right: 5px;
}

.btn_submit{
  background: blue;
  color: white;
}
.button:hover {
  opacity: 1;
  color: #fff;
  border-color: #fff;
  background: rgba(28, 27, 83, 0.15);
}

       

    </style>

 @section('content')
@section('title', 'Portfolio Website | Contact')

    <div class="wrapper">
        
          <div class=h2>
            <h2>Leave me a Message</h2>
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
          
      <form method="Post" action="/contact" >
              @csrf
              <div class="container">
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Your Name" name="name" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="message"><b>Message</b></label>
        <input type="text" placeholder="Enter Message" name="message" required>

        <div class="buttons">
          <button class="btn_cancel"><a href="/">Cancel</a></button>
          <button class="btn_submit" type="submit">Submit</button>

            </form>
        </div>
      </form>
    </div>
@endsection
