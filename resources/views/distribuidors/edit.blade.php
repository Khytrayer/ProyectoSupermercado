@extends('plantilla')
@section('content')

<div>
	<a href="{{ route('distribuidors.index') }}"> Atrás</a>
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
	<form action="{{ route('distribuidors.update',$distribuidor->id) }}" method="POST">
	    @csrf
	    <strong>Nombre:</strong>
	    <input type="text" name="nombre" value="{{ $distribuidor->nombre }}">
	            
	    <input type="submit" value="Actualizar">            
	   
	</form>
</div>
@endsection