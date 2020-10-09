@extends('Layout.master');
@section('content')
    @foreach ($allSusers as $suser)
        <h1>
            {{$suser->First_Name}}
        </h1>
        <h2>
            {{$suser->Last_Name}}
        </h2>
        <p>{{$suser->RegNo}}</p>
        
    @endforeach
    
@endsection