@extends('plantilla')
@section('content')

<div>
    @if (session('success'))
        {{ session('success') }}
            
    @endif

    @if (session('error'))           
        {{ session('error') }}            
    @endif
</div>

<div>
    <a href="{{ route('ingredientes.create') }}">Nuevo ingrediente</a>
</div>

<div>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>              
                <th>Operacions</th>
                </tr>
        </thead>

            <tbody>
            @foreach ($ingredientes as $ingrediente)
            <tr>
                <td>{{ $ingrediente->id }}</td>
                <td>{{ $ingrediente->nombre }}</td>
               
                <td>                
                   <a href="{{ route('ingredientes.show',$ingrediente->id) }}">Mostrar</a> 
                
                            
                   <a href="{{ route('ingredientes.destroy',$ingrediente->id) }}">Borrar</a> 
                
                            
                   <a href="{{ route('ingredientes.edit',$ingrediente->id) }}">Actualizar</a> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
 {{ $ingredientes->links('pagination::bootstrap-4') }}
</div>
</div>
@endsection