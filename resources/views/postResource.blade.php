<html>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="card border-dark mb-3">
                        <div class="card-header"><h2>Feedback to new students</h2></div>
                        <div class="card-body text-primary">
                            <form method="POST" action="{{config('app.url')}}/posts">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Type comment here:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" maxlength="200" name="post"></textarea>
                                </div>
                                <div class="form-input">
                                    <label>Full Name</label> <input type="text" name="full_name">
                                </div>
                                <div class="form-input">
                                    <label>Course</label> <input type="text" name="module">
                                </div>
                                <div class="row">
                                    <div class="col-auto mr-auto">
                                        <div class="form-group">  
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                            <label for="exampleFormControlFile1">Upload file</label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
    
            
