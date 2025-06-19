@extends('partials.admin')

@section('title', 'Admin Panel | Resume')

@section('content')
<<<<<<< HEAD
    <div  class="content">
        <div  class="personal-info">
            <h1>Resume</h1>
            <p>Here you can view and edit your personal information.</p>
            <div  class="resume-card">
                <div  class="section">
                    if(@personals->isEmpty())
                    
                        <p><strong>Name:Not added yet</strong></p>
                    
                    else
                    
                        <p"><strong>Name</strong></p>:<p>{{$personal['']}}</p>
                    
                    endif
                    <div class="btns">
                        <a href="/resume"><button class="btn btn-primary">Add Personal Info</button></a>
                    </div>  
                </div>

                
                
                

                <div  class="section">
                    <h3>Qualifications</h3>
                    @if ($qualifications->isNotEmpty())
                        <ul>
                            @foreach ($personal->qualifications as $q)
                                <li>
                                    {{ $q->level }} at {{ $q->institution_name }} ({{ $q->percentage_cgpa }})
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No qualifications listed.</p>
                    @endif
                </div >

                <div  class="section">
                    <h3>Skills</h3>
                    @if ($skills->isNotEmpty())
                        <ul>
                            @foreach ($skills as $skill)
                                <li>{{ $skill['name'] }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p>Add skills</p>
                    @endif
                </div >
        </div >
    </div >    
=======
    <div class="content">
        <div class="personal-info">
            <h1>Resume</h1>
            <p>Here you can view and edit your personal information.</p>
            div class="resume-card">
            <p><strong>Name</strong>: {{ $personals->name }}</p>
            <p><strong>Email</strong>: {{ $personals->email }}</p>
            <p><strong>Phone</strong>: {{ $personals->phonenumber }}</p>
            <p><strong>Address</strong>: {{ $personals->address }}</p>
            <p><strong>GitHub</strong>: <a href="{{ $personal->github_link }}" target="_blank">{{ $personal->github_link }}</a></p>

            <div class="section">
                <h3>Qualifications</h3>
                @if ($qualifications->isNotEmpty())
                    <ul>
                        @foreach ($personal->qualifications as $q)
                            <li>
                                {{ $q->level }} at {{ $q->institution_name }} ({{ $q->percentage_cgpa }})
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>No qualifications listed.</p>
                @endif
            </div>

            <div class="section">
                <h3>Skills</h3>
                @if ($skills->isNotEmpty())
                    <ul>
                        @foreach ($skills as $skill)
                            <li>{{ $skill['name'] }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>Add skills</p>
                @endif
            </div>
        </div>
    </div>    
>>>>>>> 4863c9f4531e63e0adb79e7c0c8af5e9d815b2ba
    
@endsection

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .resume-card {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 25px;
            border-radius: 5px;
        }
        .section {
            margin-top: 15px;
        }
        .section h3 {
            margin-bottom: 10px;
            color: #555;
        }
        ul {
            list-style-type: square;
            padding-left: 20px;
        }
    </style>

        

