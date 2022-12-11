@extends('plantilla')
@section('content')
<h2>Ficha Distribuidor</h2>
  
<div>          
    <a href="{{ route('distribuidors.index') }}"> 
        Atrás
    </a>
</div>

<div>
    <strong>Nombre:</strong>
    {{ $distribuidor->nombre }}
    <br>
    <strong>Productos distribuidos:</strong>

    <ul>
     @foreach($distribuidor->producto as $productos)
          <li>{{ $productos->nombre }}</li>
     @endforeach
    </ul>
</div>
@endsection