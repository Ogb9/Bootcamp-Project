<?php 
    $pageTitle = "SFF-Student Login";
?>
@extends('Layout.master')

@section('content')

    <main role="main" class="container-fluid">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="col-4">
                        <u><h2>Student Registration</h2></u>
                        <h4>Please enter the required information in the registration form. Required fields are marked with an asterisk next to the label</h4>                       
                    </div>
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <u><h5 class="card-title">Login Details</h5></u>
                            <form method="post" action="{{route('students.store')}}">
                                @csrf
                                    <div class="form-group row">
                                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="username">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                      <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword" name="password">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                          <input type="password" class="form-control" id="inputPassword" placeholder="retype password">
                                        </div>
                                    </div>
                                    <u><h5 class="card-title">Personal Information</h5></u>
                                    <div class="form-group row">
                                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Full Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="full_name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Preffered Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="preffered_name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Reg. No.</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="reg_no" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleFormControlSelect2" class="col-sm-2 col-form-label">Select Modules Taken</label>
                                        <div class="col-sm-10">
                                            <select name="module_id" multiple="multiple" class="form-control" id="exampleFormControlSelect2" size="6">
                                            <option disabled>Ctrl+Click to multi-select</option>
                                            <option value="1">Laravel</option>
                                            <option value="2">PHP</option>
                                            <option value="3">HTML</option>
                                            <option value="4">Javascript</option>
                                            <option value="5">Bootstrap</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="d-flex justify-content-end">
                                            <div class="row">                       
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </div>
                                        </div>  
                                    </div> 
                                </form>
                            </div>
                        </div>                          
                    </div>
                </div> 
            </div>
        </div>
    </main>
@endsection   
