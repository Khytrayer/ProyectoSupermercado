<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@extends('layouts.app')
@section('content')

@if (session('status'))
<div>
	{{session('status')}}
</div>
@endif

<h2>Productos</h2>

<h3><a href="{{url('productos/create')}}">Nuevo</a></h3>@include('productos.search')
<table class="table">
	<thead class="thead-dark">

<tr><th>Id</th><th>Nombre</th><th>Precio</th> <th>Distribuidor</th> 

</thead>


@foreach($productos as $producto)
	<tr>
		<td>{{$producto->id}}</td>
		<td>{{$producto->nombre}}</td>
		

		<td>
			<a href="{{route('productos.destroy',$producto->id)}}">Borrar</a>
			
			<a href="{{route('productos.edit',$producto->id)}}">Actualizar</a>
			<a href="{{route('productos.show',$producto->id)}}">Mostrar</a>

		</td>
	</tr>
@endforeach
</table>
 <hr>
        <div>
            {{ $productos->links('pagination::bootstrap-4') }}
        </div>
    <hr>
@endsection


</body>
</html>