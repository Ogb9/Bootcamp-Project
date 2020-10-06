<html>
    <body>
        <h1>These are the available feedback:</h1>
        @foreach ($allPosts as $post)
            Name:  {{$post->full_name}}<br>
            Course: {{$post->module}}<br>
            Post:  {{$post->post}}<br>
            <hr>
        
            
        @endforeach
    </body>
</html>
    
            
