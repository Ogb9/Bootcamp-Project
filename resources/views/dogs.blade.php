<html>
<h1>{{$num}} Dogs!</h1>
    @for($i=0; $i<$num; $i++)
        <p>The current value is {{$num}}</p>
    @endfor
    {{-- @if($num<=max) --}}
</html>