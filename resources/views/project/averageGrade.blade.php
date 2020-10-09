

@php 
$pageTitle = "SFF-Result";
$link = "/logout";
$linkLabel = "Logout";
@endphp
@extends('Layout.master')
@section('content') 


<div class="container-fluid">
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card bg-dark text-white">
            <img src="{{asset('images\joanna-kosinska-unsplash.jpg')}}" class="card-img" alt="...">
            <div class="card-img-overlay">
            <h3 style="padding-bottom:20px" class="card-title">{{ $module }}</h3><hr>
                <p><h5>Average Grade: {{ ($avgGrade) }} </h5></p> 
                <p><h5>Highest Grade: {{ $maxGrade }} </h5></p> 
                <p><h5>Lowest Grade: {{ $minGrade }} </h5></p> 
            </div>
        </div>
    </div>
</div>
</div>
@endsection

