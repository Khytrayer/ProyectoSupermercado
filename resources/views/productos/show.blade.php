@extends('plantilla')
@section('content')
<h2>Ficha Producto</h2>

<div>
    <a href="{{ route('productos.index') }}"> 
        Atrás
    </a>
</div>

<div>
    <strong>Nombre:</strong>
    {{ $productos->nombre }}
    <strong>Precio:</strong>
    {{ $productos->precio }}
    <strong>Distribuidor:</strong>
    {{$productos->distribuidor->nombre}}
</div>



@endsection