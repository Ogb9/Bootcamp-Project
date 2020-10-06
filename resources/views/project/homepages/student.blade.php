<?php 
    $pageTitle = "SFF-Modules Taken";
?>
@extends('Layout.HnF')
@section('content')




<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="alert alert-success" role="alert">
					<h3>Welcome {{ $user->name }}</h3>
                </div>  
                <div class="alert alert-success" role="alert">
					<h3>You are registered on <b>{{count( $user->modules) }}</b> modules</h3>
				</div>                   
			</div>
        </div>
        <div class="row">
			<div class="col-md-6 offset-md-3">
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
                                                    <a class="dropdown-item" href="{{route('posts.create', $module)}}">Post comment/resource</a>
                                                    <a class="dropdown-item" href="#">Provide feedback to lecturer</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">View posted comments/resources</a>
                                                    <a class="dropdown-item" href="#">View grade</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="row">
                                <a href= "{{ route('logout') }}">Log out</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>		 
        </div>
    </div>


@endsection


	
    










        {{-- <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                        <div class="alert alert-success" role="alert">
                            <h3>Welcome {{  $user->name }}</h3>
                        </div>                    
                    </div>
                </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">   
                        <div class="col-8">
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success text-center" role="alert">
                                        <h3>Modules Taken</h3>
                                    </div> 
                                </div>
                                @include('project/widgets/studentModules')
                                <div class="col-6">
                                    <div class="card border-dark mb-3">
                                        <div class="card-header"><h2>ELE</h2></div>
                                        <div class="card-body text-primary">
                                            <p class="card-text"><a href="{{route('commentForm')}}" class="btn btn-outline-dark">Post comment/resource</a></p>
                                            <p class="card-text"><a href="#" class="btn btn-outline-dark">View posted comments/resources</a></p>
                                            <p class="card-text"><a href="#" class="btn btn-outline-dark">Provide feedback to lecturer</a></p>
                                            <p class="card-text"><a href="#" class="btn btn-outline-dark">View grades</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                <div class="card border-dark mb-3">
                                        <div class="card-header"><h2>CVE</h2></div>
                                        <div class="card-body text-primary">
                                            <p class="card-text"><a href="#" class="btn btn-outline-dark">Post comment/resource</a></p>
                                            <p class="card-text"><a href="#" class="btn btn-outline-dark">View posted comments/resources</a></p>
                                            <p class="card-text"><a href="#" class="btn btn-outline-dark">Provide feedback to lecturer</a></p>
                                            <p class="card-text"><a href="#" class="btn btn-outline-dark">View grades</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                <div class="card border-dark mb-3">
                                        <div class="card-header"><h2>MTH</h2></div>
                                        <div class="card-body text-primary">
                                            <p class="card-text"><a href="#" class="btn btn-outline-dark">Post comment/resource</a></p>
                                            <p class="card-text"><a href="#" class="btn btn-outline-dark">View posted comments/resources</a></p>
                                            <p class="card-text"><a href="#" class="btn btn-outline-dark">Provide feedback to lecturer</a></p>
                                            <p class="card-text"><a href="#" class="btn btn-outline-dark">View grades</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>                   
                        </div>
                        <div class="col-4 d-none d-sm-block">
                            <div class="alert alert-danger" role="alert">
                                <h3>Adverts</h3>
                                <p>Adverts</p>
                                <p>Adverts</p>
                                <p>Adverts</p>
                                <p>Adverts</p>
                                <p>Adverts</p>
                                <p>Adverts</p>
                                <p>Adverts</p>
                                <p>Adverts</p>
                                <p>Adverts</p>
                                <p>Adverts</p>
                                <p>Adverts</p>
                                <p>Adverts</p>
                                <p>Adverts</p>
                                <p>Adverts</p>
                                <p>Adverts</p>
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection --}}
