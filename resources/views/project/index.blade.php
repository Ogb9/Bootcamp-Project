@extends('Layout.master')

@section('content')


        <div class="container-fluid">
           <div class="row">
            <div class="col-8">
            <div class="card bg-light text-white text-center">
                    <img src="{{asset('images\01.jpg')}}" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h1 style="padding-bottom:20px; padding-top:90px; font-family:'Candara'" class="card-title"> <b>Students' helping hand</b></h1><hr>
                        <p style="font-family:'Candara'"><h4>Give feedback on any modules you
                            have taken in the past. Your comments will make the work of your 
                            successors easier and improve lecturers' performance.</h4></p> 
                        <p><h1>&#128170 &#128170</h1></p> 
                    </div>
                </div>
            </div>
                <div class="col-4" > 
                    <div class="card bg-dark mb-3 text-center">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h3 style="color:Saddlebrown"><b>Students</b><h3><hr>
                                <h6><p class="font-weight-bold" style="font-family:'Candara';color:MidnightBlue">Tell others what you found useful &#128226</p>
                                <p class="font-weight-bold" style="font-family:'Candara';color:MidnightBlue">Give anonymous feedback to lecturers &#128172</p></h6>
                                <a href= "{{ route('login') }}" class="btn btn-lg btn-primary">Login</a>      
                            </li>
                            <li class="list-group-item">
                                <h3 style="color:Saddlebrown"><b>Lecturers<b><h3><hr>
                                    <h6><p class="font-weight-bold" style="font-family:'Candara';color:MidnightBlue">View feedback from your students on the 
                            different modules you've taught &#128195<p></h6>
                                <a href="{{ route('lHomepage') }}" class="btn btn-lg btn-primary">Login</a>   
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection

