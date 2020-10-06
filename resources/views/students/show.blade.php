@extends('Layout/HnF')

@section('content')

	<div class="row">
		<div class="col-md-3">
			<div class="card">

				<div class="card-body">
					<h2>
						{{ $student->name }}
					</h2>

					<p>
						{{ $student->regNo }}
					</p>			
				</div>
			</div>	
		</div>
		<div class="col-md-6">
			<h3>
				Modules
			</h3>
			
			@foreach($student->modules as $module)
				<h1>
					{{ $module->title }}
				</h1>
				{{-- <h5>
					This module has been registered by: {{ count($module->students) }} students
				</h5> --}}

				@foreach($module->students as $eachstudent)
					<p>
						<a href="{{ $eachstudent->url() }}">
							{{ $eachstudent->name }}
						</a>
					</p>
				@endforeach

			@endforeach
		</div>
	</div>

	{{-- <div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
					<div class="alert alert-success" role="alert">
						<h3>Welcome {{$student->full_name}}</h3>
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
								<h3>You are registered on <b>{{count($student->modules)}}</b> modules</h3>
								</div> 
							</div>


	@foreach($student->modules as $module)
		<div class="col-6">
			<div class="card border-dark mb-3">
				<div class="card-body text-primary">
					<div class="btn-group dropright">
						<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<h2>{{ $module->title }}</h2>
							<h5>{{ $module->description }}</h5>
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="{{route('commentForm')}}">Post comment/resource</a>
							<a class="dropdown-item" href="#">Provide feedback to lecturer</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">View posted comments/resources</a>
							<a class="dropdown-item" href="#">View grade</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endforeach --}}


@endsection