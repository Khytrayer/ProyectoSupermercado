@extends('plantilla')
@section('content')
<h2>Ficha Ingrediente</h2>
  
<div>          
    <a href="{{ route('ingredientes.index') }}"> 
        Atrás
    </a>
</div>

<div>
    <strong>Nombre:</strong>
    {{ $ingrediente->nombre }}
    <br>

</div>
@endsection