@extends('Layout.master')

@section('content')

        <main role="main" class="container-fluid">
            <div class="row">
                <div class="col-12">
                        <h1 id="LoginPage">Log in</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <form>
                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg">Email or Username</label>
                            <div class="col-sm-8">
                            <input type="email" class="form-control form-control-lg" id="colFormLabelLg">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg">Password</label>
                            <div class="col-sm-8">
                            <input type="email" class="form-control form-control-lg" id="colFormLabelLg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3  offset-sm-6">
                            <a href="{{ route('lecturerIndex') }}" class="btn btn-primary">Log in <b>></b></a>
                            </div>
                        </div>   
                    </form>
                </div>
                <div class="col-4 offset-2">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true"><h3>Password Management</h3></a>
                        <a href="#" class="list-group-item list-group-item-hover">Change Password</a>
                        <a href="#" class="list-group-item list-group-item-hover">Forgotten password?</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h6 id="tnc"> By logging in you accept the terms and conditions of this institution</h6>
                </div>
            </div>

            
@endsection            

          
