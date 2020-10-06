<?php 
    $pageTitle = "SFF-Student Login";
?>
@extends('Layout.HnF')

@section('content')

    <main role="main" class="container-fluid">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="col-12">
                        <u><h2>Student Registration</h2></u>
                        
                    </div>
                </div> 
            </div>
        </div>
        <div class="container">
            <div class="row" class="d-flex justify-content-start">
                <div class="col-md-6 offset-md-3">
                    <form action = "{{ route('sInfo')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-md-3 col-form-label">First Name</label>
                            <div class="col-md-9">
                            <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="FN">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-3 col-form-label">Last Name</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="LN">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                            <input type="email" class="form-control form-control-lg" id="colFormLabelLg" name="UN">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                            <input type="password" class="form-control form-control-lg" id="colFormLabelLg" name="PW">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-3 col-form-label">Reg No</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="RN">
                            </div>
                        </div>
                        <div class = "form-group row">
                            <label for = "name" class="col-sm-3 col-form-label">Select Modules</label>
                            <div class="col-sm-9">
                                <select name="MS[]" multiple="multiple" class = "form-control" size="6">
                                    <option disabled>Ctrl+click to muti-select</option>
                                    <option value="MEC">MEC</option>
                                    <option value="CVE">CVE</option>
                                    <option value="ELE">ELE</option>
                                    <option>CPE</option>
                                 </select>
                            </div>  
                        </div>
                        <div class="container">
                            <div class="d-flex justify-content-end">
                                <div class="row">                       
                                    <input type="submit" value="Submit">
                                </div>
                            </div>  
                        </div>   
                    </form>
                    <div class="container-fluid">
                        <div class="d-flex justify-content-center">
                            <div class="row">
                                <div class="col-12">
                                    <p id="tnc"> By submitting this form you accept the terms and conditions of this institution</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </main>
@endsection   
