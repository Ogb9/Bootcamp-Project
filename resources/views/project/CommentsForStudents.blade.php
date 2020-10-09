@php 
    $pageTitle = "SFF-Modules Taken";
    $link = "/logout";
    $linkLabel = "Logout";
@endphp
@extends('Layout.master')
@section('content') 


<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card bg-dark text-white">
                <img src="{{asset('images\pexels-karolina-grabowska-4389643.jpg')}}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    @if (count($allPosts)>=1)
                    <h3 style="padding-bottom:20px" class="card-title">Comments on {{ $course }} by previous students:</h3><hr>
                    @foreach ($allPosts as $post)
                    <ul class="list-group list-group-flush">
                        <li style="padding-bottom:20px; font-family:verdana" class="card-text"><h5>{{ $post->sFeedback }}</h5></li><br>
                    </ul>
                    <hr>
                    
                    @endforeach 
                @else
                <h1 class="card-title">Oops!! No feedback on {{ $course }} as yet</h1> 
                @endif
                </div>
            </div>
        </div>
    </div>
</div>

             
@endsection
    
            
