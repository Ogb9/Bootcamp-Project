@extends('Layout/HnF');


@section('content')
    @foreach ($students as $student)
        <h1>{{$student->name}}</h1>
        <p>{{$student->regNo}}</p>

    @endforeach

    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-12">
                    {{-- <a href="{{route('students.create')}}"> No account? Create one</a> --}}
                    <a href="{{route('register')}}"> No account? Create one</a>
                </div>
            </div>
        </div>
    </div>

@endsection