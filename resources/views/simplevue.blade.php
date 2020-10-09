<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </head>
        <body>
            <div id="app">
            @extends('Layout.master')
            @section('content')
            <h1>Message for today: {{message}}</h1>
            <p>Is today Monday? {{isMonday}}</p>
            <p>Car of the day: {{ car }}</p>
            @endsection
            </div>
            <script>
                var app = new Vue({
                    el: '#app',
                    data: function(){
                        return {
                            message: 'Hi from bootcamp',
                            isMonday: true,
                            dayOfMonth: 5,
                            colors: ['red', 'blue', 'yellow', 'green'],
                            car: {make:'Honda', model:'Accord'}
                        }
                    }
                });
            </script>         

        </body>
</html>
    
            
