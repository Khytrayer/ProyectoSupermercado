@extends('plantilla')
@section('content')

<div>
	<a href="{{ route('ingredientes.index') }}"> Volver</a>
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
	<form action="{{ route('ingredientes.update',$ingrediente->id) }}" method="POST">
	    @csrf
	    <strong>Nombre:</strong>
	    <input type="text" name="nombre" value="{{ $ingrediente->nombre }}">
	            
	    <input type="submit" value="Actualizar">            
	   
	</form>
</div>
@endsection