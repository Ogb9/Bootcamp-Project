<?php 
    $pageTitle = "SFF-Comment Page";
    $link = "/logout";
    $linkLabel = "Logout";
?>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
@extends('Layout.master')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-6 offset-3">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-6 offset-3">
            <div class="card border-dark mb-3">
                
                <div class="card-body text-primary">
                    <form method="GET" action="{{ route('posts.store', $courseId) }}">
                        <div class="form-group">
                            <label style=color:black><h2> What's your advice to upcoming students about <b>{{ $course }}</b> ?</h2></label>
                            <div id="app">
                                <textarea maxlength="50" minlength="2" class="form-control" id="exampleFormControlTextarea1" name="sFeedback" v-model="writtenText" rows="6" placeholder="TypeHere"></textarea>
                                <p>@{{charactersLeft}}/@{{maxLength}} characters remaining</p>
                                <span v-if="charactersLeft===0">
                                    Maximum character length reached
                                </span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label style=color:black><h2> What's your feedback to the lecturer for <b>{{ $course }}</b> ?</h2></label>
                            <div id="app1">
                                <textarea maxlength="10" minlength="2" class="form-control" id="exampleFormControlTextarea1" name="lFeedback" v-model="writtenText" rows="6" placeholder="TypeHere"></textarea>
                                <p>@{{charactersLeft}}/@{{maxLength}} characters remaining</p>
                                <span v-if="charactersLeft===0">
                                    Maximum character length reached
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto offset-10">
                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        var app = new Vue({
            el: '#app',
            data: function(){
                return {     
                    writtenText :'',
                    maxLength : 50,
                }
            },             
            computed: {
                charactersLeft: function(){
                    char = this.writtenText.length,
                    limit = 50;
                    return (limit - char);
                },                 
            }                                       
        });
        var app = new Vue({
            el: '#app1',
            data: function(){
                return {     
                    writtenText :'',
                    maxLength : 50,
                }
            },             
            computed: {
                charactersLeft: function(){
                    char = this.writtenText.length,
                    limit = 50;
                    return (limit - char);
                },                 
            }                                       
        });
    </script>  
            
@endsection