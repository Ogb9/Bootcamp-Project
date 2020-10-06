<html>
    <body>
        <h1>These are the registered employees:</h1>
        @foreach ($allDetails as $detail)
            Name:  {{$detail->name}}<br>
            Age: {{$detail->age}}<br>
            <hr>   
        @endforeach


    </body>
</html>
    
            
