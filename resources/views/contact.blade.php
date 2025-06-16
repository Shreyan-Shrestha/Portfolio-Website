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
  /* text-align: left; */
  border: 1px solid rgba(255, 255, 255, 0.5);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
}
form {
  display: flex;
  flex-direction: column;
}
h2 {
  font-size: 2rem;
  margin-bottom: 20px;
  padding: 10px 100px;
  /* padding: 25px 250px; */
  /* color: #fff; */
}
.container {
  position: relative;
  border-bottom: 2px solid #ccc;
  margin: 15px 0;
}


/* Full-width inputs */
input[type=text], input[type=password] {
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
  /* width: 20%; */
}
button:hover {
  opacity: 1;
}
button:hover {
  color: #fff;
  border-color: #fff;
  background: rgba(28, 27, 83, 0.15);
}

       

    </style>

 @section('content')
@section('title', 'TODO APP| ADD')
 <nav class="navbar">
        <a href="#" class="logo">Portfolio</a>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="about.html">Projects</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="services.html">Resume</a></li>
        </ul>
    </nav>
    <div class="wrapper">
        
          <div class=h2>
            <h2>ADD TODO</h2>
            @if ($errors->any())
            <strong>Whoops!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                <li></li>
            </ul>

          </div>
          @endif
          <form method="Post" action="/contact" >
            @csrf
            <div class="container">
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Your Name" name="name" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="message"><b>Message</b></label>
      <input type="text" placeholder="Enter Message" name="message" required>
      <br>


  
      

      <button type="button"> <a href="/">Cancel</button>
      <button type="submit">Submit</button>

        </form>
    </div>
        
@endsection
