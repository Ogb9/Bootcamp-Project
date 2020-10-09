@php 
    $pageTitle = "SFF-Modules Taught";
    $link = "/logout";
    $linkLabel = "Logout";
@endphp

@extends('Layout.master')
@section('content')


        <div class="container-fluid" style="background-color: thistle">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="alert alert-info" role="alert">
                        <h3>Welcome <b>{{ $user->name }}</b></h3>
                    </div>                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="alert alert-secondary" role="alert">
                        <h3>You teach the following Modules</h3>
                    </div>                    
                </div>
            </div> 
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="row">
                        @foreach( $user->modules as $module)
                            <div class="col-6">
                                <div class="card border-dark mb-3">
                                    <div class="card-body text-primary text-center">
                                        <div class="btn-group dropright">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <h2>{{ $module->title }}</h2>
                                                <h5>{{ $module->description }}</h5>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('modules.avgGrade.show', $module) }}">Average grade</a>
                                                <a class="dropdown-item" href="{{ route('posts.showCommentsForLecturer', $module) }}">View feedback</a>
                                            </div>
                                        </div>                                          
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>                       
                </div>
            </div> 
        </div>
@endsection

