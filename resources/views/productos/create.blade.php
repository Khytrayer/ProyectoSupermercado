@extends('plantilla')
@section('content')

<div>
	<a href="{{ route('productos.index') }}"> Atrás</a>
</div>

<div>           
	<form action="{{ route('productos.store') }}" method="POST">
	    @csrf
	       
	    <strong>Nombre:</strong>
	    <input type="text" name="nombre">
	    <strong>Precio:</strong>
	    <input type="number" name="precio">
	    <strong>Distribuidor:</strong>
        <select name="distribuidor_id">
            @foreach($distribuidors as $distribuidor)
                <option value="{{ $distribuidor->id }}" {{ old('distribuidor_id') == $distribuidor->id ? 'selected' : '' }} >
                            {{ $distribuidor->nombre }}
                        </option>       
            @endforeach            
        </select>
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