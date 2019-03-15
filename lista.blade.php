<!DOCTYPE html>
<html>

  
<head><title>Lista</title></head>
<body>
  {{--
  @for ($i=0; $i<count($lista); $i++)
    <p>{{ $lista[$i] }}</p>
  @endfor
  --}}

  @foreach ($lista as $elemento)
  <p>{{ $elemento['Local'] }} - {{$elemento['venta']}}</p>
  @endforeach

</body>
</html>
