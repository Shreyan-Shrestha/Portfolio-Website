@extends('partials.admin')

@section('title', 'Admin Panel | Resume')

@section('content')
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

        

