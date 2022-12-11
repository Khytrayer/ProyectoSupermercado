@extends('plantilla')
@section('content')

<div>
	<a href="{{ route('productos.index') }}"> Atrás</a>
</div>          
<div> 
	@if ($errors->any())
	<ul>
	    @foreach ($errors->all() as $error)
	    	<li>{{ $error }}</li>
	    @endforeach
	</ul>        
        @endif
</div>
<div>
	<form action="{{ route('productos.update',$producto->id) }}" method="POST">
	    @csrf
	    <strong>Nombre:</strong>
	    <input type="text" name="nombre" value="{{ $producto->nombre }}">
	    <input type="text" name="precio" value="{{ $producto->precio }}">

	    <input type="submit" value="Actualizar">            
	   
	</form>
</div>
@endsection