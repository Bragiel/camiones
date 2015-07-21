<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>HOME</title>
    <link type="text/css" rel="stylesheet" href="{{url('css/style.css')}}">
  </head>
  <body>
    <div id="wrapper">
      <div>
        {!! Form::open(['url'=>'homeCreate']) !!}
        {!! Form::label('income', 'Entrada', array('class' => 'mylabel')) !!}
        {!! Form::input('text', 'truck_number', null, ['class' => 'incomefld', 'placeholder'=>'camion']) !!}
        {!! Form::submit('Aceptar', array('class' => 'btn')) !!}
        {!! Form::close() !!}
      </div>
    </div>
    <script type="javascript" src="{{url('js/min/functions.js')}}"></script>
  </body>
</html>