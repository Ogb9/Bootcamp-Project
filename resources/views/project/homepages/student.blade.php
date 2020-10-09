@php 
    $pageTitle = "SFF-Modules Taken";
    $link = "/logout";
    $linkLabel = "Logout";
@endphp
@extends('Layout.master')
@section('content')

<div class="container-fluid" style="background-color: thistle">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="alert alert-info" role="alert">
                <h3>Hello <b>{{ $user->name }}</b></h3>
            </div>  
            <div class="alert alert-secondary" role="alert">
                <h3>You are registered on <b>{{count( $user->modules) }}</b> modules</h3>
            </div>                   
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        @foreach( $user->modules as $module)
                            <div class="col-md-6">
                                <div class="card border-dark mb-3">
                                    <div class="card-body text-primary">
                                        <div class="btn-group dropright">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <h2>{{ $module->title }}</h2>
                                                <h5>{{ $module->description }}</h5>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{route('posts.create', $module)}}">Post comment/feedback</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="{{route('posts.showCommentsForStudents', $module)}}">View posted comments</a>
                                            <a class="dropdown-item" href="{{ route('modules.grade.show',$module) }}">View grade</a>
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
    </div>
</div>


@endsection


	
    










        