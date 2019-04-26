<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listado</title>



        
    </head>
    <body>
      <a href="/agregar">Agregar Post</a>
      <ul>
      @foreach($lista as $fila)
        <p>{{$fila->title}}</p>
        <form action="/entradas/{{ $fila->id }}" method="POST">
          {{ method_field('DELETE') }}
          {{ csrf_field() }}
        <button type='submit' class="{{ $class or 'btn btn-danger' }}" value="delete">Borrar</button>
        </form>
      @endforeach
    </ul>
    </body>
</html>
