<?php 
    $pageTitle = "SFF-Student Login";
?>
@extends('Layout.HnF')

@section('content')

    <main role="main" class="container-fluid">
        <div class="container">
            <div class="d-flex justify-content-start">
                <div class="row">
                    <div class="col-12">
                        <h1 id="LoginPage">Log in</h1>
                    </div>
                </div> 
            </div>
        </div>
        <div class="container">
            <div class="row" class="d-flex justify-content-start">
                <div class="col-sm-6">
                    <form>
                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">Username</label>
                            <div class="col-sm-9">
                            <input type="email" class="form-control form-control-lg" id="colFormLabelLg">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">Password</label>
                            <div class="col-sm-9">
                            <input type="email" class="form-control form-control-lg" id="colFormLabelLg">
                            </div>
                        </div>
                        <div class="container">
                            <div class="d-flex justify-content-end">
                                <div class="row">                       
                                    <a href="{{ route('studentIndex') }}" class="btn btn-primary">Log in <b>></b></a>
                                </div>
                            </div>  
                        </div>   
                    </form>
                    <div class="container-fluid">
                        <div class="d-flex justify-content-center">
                            <div class="row">
                                <div class="col-12">
                                    <p id="tnc"> By logging in you accept the terms and conditions of this institution</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="d-flex justify-content-center">
                            <div class="row">
                                <div class="col-12">
                                    <a href="{{'students.create'}}"> No account? Create one</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 offset-sm-2">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true"><h3>Password Management</h3></a>
                        <a href="#" class="list-group-item list-group-item-hover">Change Password</a>
                        <a href="#" class="list-group-item list-group-item-hover">Forgotten password?</a>
                    </div>
                </div>
            </div>
        </div>  
    </main>           
@endsection            

          
