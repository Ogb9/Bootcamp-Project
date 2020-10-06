<html>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="card border-dark mb-3">
                        <div class="card-header"><h2>Register new Employee</h2></div>
                        <div class="card-body text-primary">
                            <form method="POST" action="{{config('app.url')}}/details">
                                @csrf
                                <div class="form-input">
                                    <label>Name</label> <input type="text" name="name">
                                </div>
                                <div class="form-input">
                                    <label>Age</label> <input type="number" name="age">
                                </div>
                                <div class="row">
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
    
            
