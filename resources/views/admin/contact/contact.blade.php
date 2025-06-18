@extends('partials.layout')
    <style>
body {
  min-height: 99vh;
  width: 100%;
    background-color: #f0f0f0;
    color: #333;
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

.a{
    color: #000;
    text-decoration: none;
}
.navbar{
    width: 100%;
    padding: 25px 9%;
    background-color: #fff;
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
    justify-content: space-evenly;
    width: 100%;
    gap: 20px;

}
.navbar ul li{
    list-style: none;
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

.content{
  display: flex;
  justify-content: center;
  align-items: center;
}
.wrapper{
  width: 400px;
  border-radius: 8px;
  padding: 60px;
  border: 1px solid rgba(255, 255, 255, 0.5);
  box-shadow: 0 2px 10px rgba(0.05,0.05);
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
.nav{
  display: flex;
  justify-content: space-between;
}
.navbar{
  width: 100%;
  padding: 25px 9%;
  background:rgb(246, 247, 244);
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
    justify-content : space-evenly;
    width: 100%;
    gap:20px

}
.navbar ul li{
    list-style: none;
}
.navbar ul li a {
    color: black;
    font-size: 18px;
    font-weight: 500;
    transition: .5s;

}
.navbar ul li a:hover {
    color: blue;
}
.inp_msg{
  height: 90px;
}
.inp_msg placeholder{
  text-align: center;
}

</style>

 @section('content')
@section('title', 'Portfolio Website | Contact')

<div class="content">
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
        <input class="inp_msg" type="text" placeholder="Enter Message" name="message" required>

        <div class="buttons">
          <button class="btn_cancel"><a href="/">Cancel</a></button>
          <button class="btn_submit" type="submit">Submit</button>

        
        </div>
      </form>
  </div>
</div>
@endsection
