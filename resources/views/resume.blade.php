@extends('partials.layout')
@section('title', 'Portfolio Website| Resume')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    a {
        color: #000;
        text-decoration: none;
    }

    .log {
        display: flex;
        justify-items: center;
    }

    .nav {
        display: flex;
        justify-content: space-between;
       
    }

    .navbar {
        width: 100%;
        padding: 25px 9%;
        background: rgb(246, 247, 244);
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);

    }

    .navbar .logo {
        font-size: 30px;
        font-weight: 700;
    }

    .navbar ul {
        display: flex;
        justify-content: space-evenly;
        width: 100%;
        gap: 20px
    }

    .navbar ul li {
        list-style: none;
        /* margin-left: 35px; */
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

    .container {
        width: 100%;
        min-height: 100px;
        background: rgb(246, 247, 244);
    }

    .content {
        margin: 30px 20px;
        padding: 20px;

    }

    .profiletext {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-bottom: 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }

    .image {
        position: relative;
        display: flex;
        justify-self: center;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        overflow: hidden;
        object-fit: cover;

    }

    .profiletext .image img {
        /* position: absolute; */
        top: 0;
        /* left: 0; */
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .profiletext h2 {
        color: black;
        font-size: 1.5em;
        margin-top: 20px;
        text-transform: uppercase;
        text-align: center;
        font-weight: 600;
        line-height: 1.4em;
    }

    .profiletext h2 span {
        color: black;
        font-size: 1.2rem;
        font-weight: 400;
    }

    .contactinfo {
        padding-top: 40px;
    }

    .title {
        color: black;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 1px;
        margin-bottom: 20px;

    }

    .contactinfo ul {
        position: relative;
    }

    .contactinfo ul li {
        position: relative;
        list-style: none;
        margin: 10px 70px;
        cursor: pointer;

    }

    .contactinfo ul li .icon {
        display: inline-block;
        width: 20px;
        font-size: 18px;
        color: #03a9f4;
    }

    .contactinfo ul li span {
        color: black;
        font-weight: 300;
    }

    .about-skills ul{
        margin-left: 60px;
        margin-bottom: 5px;
    }

    .title2 {
        color: black;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 20px;
    }

    p {
        color: #333;
    }

    .tableheads {
        background-color: #f2f2f2;
        color: black;
        text-transform: uppercase;
        font-size: 18px;
        text-align: center;
        font-weight: 600;
    }

    .tableheads1 {
        background-color: #f9f9f9;
        color: black;
        text-align: center;
        font-size: 16px;
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

    .lang ul li {
        position: relative;
        list-style: square;
        font-size: 18px;
        margin: 10px 20px;
        cursor: pointer;

    }

    .about .box {
        display: flex;
        flex-direction: row;
        margin: 20px 0;
    }

    .about .box .year_company {
        min-width: 150px;
    }

    .about .box .year_company h5 {
        text-transform: uppercase;
        color: #848c90;
        font-weight: 600;
    }

    .about .box .text h4 {
        text-transform: uppercase;
        color: #02a7da;
        font-size: 16px;
    }

    .skills .box {
        position: relative ;
        width: 100%;
        display: flex; 
        grid-template-columns: 150px 1fr;
        justify-content: center;
        align-items: center;
    }

    .skills .box h4 {
        text-transform: uppercase;
        color: black;
        font-weight: 500;
    }

    .skills ul li {
        position: relative;
        list-style: square;
        font-size: 18px;
        margin: 10px 20px;
        cursor: pointer;

    }
    .no-data {
        text-align: center;
        color: #999;
        font-size: 16px;
        padding: 20px;
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
    .table{
        margin-bottom: 10px;
    }
    
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('content')
    <div class="content">
        <div class="image">
            <img src="https://placehold.co/200?text=Photo" alt="">
        </div>
        <div class="profiletext">
            <h2>{{$about['name']}}<br><span>{{$about['jobtitle']}}</span></h2><br><span>{{$about['aboutlong']}}</span>
        </div>
        <div class="contactinfo">
            <h3 class="title">Contact Info</h3>
            <ul>
                <li>
                    <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                    <span class="text">{{$about['address']}}</span>
                </li>
                <li>
                    <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <span class="text"> +977-{{$about['number']}}</span>
                </li>

                <li>
                    <span class="icon"><i class="fa fa-envelope-open" aria-hidden="true"></i></span>
                    <span class="text">{{$about['email']}}</span>
                </li>
                <li>
                    <span class="icon"><i class="fa fa-github" aria-hidden="true"></i></span>
                    <span class="text"><a href="{{$about['github']}} target="_blank" rel="noopener noreferrer"">{{$about['github']}}</a></span>
                </li>
            </ul>

        </div>

        <div class="contactinfo education">
            <h3 class="title">Education</h3>
            <div class="table">
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
                                                <td>{{ $quals['institute-detail']}}</td>
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
                    <tbody>
                        <tr>
                            <td colspan="4" class="no-data">No Education details added yet. Go to Qualification tab and fill details</td>
                        </tr>
                    </tbody>
                </table>
            @endforelse
            </table>
            </div>


        </div>

        <div class="about-skills">
            <h3 class="title2">Skills</h3>
            <ul>
                @forelse ($skills as $skill)
                    <li>
                        <span class="icon">{{$skill['name']}}</span>
                    </li>
                @empty
                    <li class="no-data">No skills added yet. Go to Skills tab and Add to show here</li>
                @endforelse
            </ul>
        </div>

        <div class="contactinfo project">
            <h3 class="title2">Projects</h3>
            <div class="table">
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
        
    </div>
@endsection