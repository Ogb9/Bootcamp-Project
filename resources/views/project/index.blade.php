@extends('Layout.HnF')

@section('content')
<main role="main" class="container-fluid">
            <div class="jumbotron">
                <h1>Students' Helping Hand</h1>
                <p class="lead">We are interested in your feedback on any modules you
                    have taken in the past. Your comments will make the work of your 
                    successors easier and improve lecturers' performance.
                </p>
            </div>
            <div class="card-deck">
                <div class="card">
                    {{-- <div class="card-body text-center"><a href= "{{ route('studentloginpage') }}"> --}}
                    <div class="card-body text-center"><a href= "{{ route('login') }}">
                        <h5 class="card-title"><b>Students</b></h5>
                        <p class="card-text">Help students new to a module you've
                            already taken by:</p>
                            <ul>
                                <li>
                                    uploading useful resources/comments
                                </li>
                                <li>
                                    providing anonymous feedback to lecturers
                                </li>
                            </ul>
                        </p>
                        <p class="btn btn-primary">Student page <b>></b></p>
                    </div>
                    <img src="{{asset('images/Another_Workspace.jpg')}}" class="card-img-top" alt="...">
                </a></div>
                {{-- <a href="{{ route('lecturerloginpage') }}"><div class="card"> --}}
                <a href="{{ route('register') }}"><div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title"><b>Lecturers</b></h5>
                        <p class="card-text">View feedback from your students on the 
                            different modules you've taught.
                        </p>
                        <p class="btn btn-primary">Lecturer page <b>></b></p>
                    </div>
                    <img src="{{asset('images/Workspace.jpg')}}" class="card-img-top" alt="...">
                </a></div>
        </div>
@endsection