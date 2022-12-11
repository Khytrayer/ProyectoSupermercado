@extends('plantilla')
@section('content')

<div>
	<a href="{{ route('ingredientes.index') }}"> Atrás</a>
</div>

<div>           
	<form action="{{ route('ingredientes.store') }}" method="POST">
	    @csrf
	       
	    <strong>Nombre:</strong>
	    <input type="text" name="nombre">
	            
	    <input type="submit" value="Guardar">     
	   
	</form>
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
@endsection