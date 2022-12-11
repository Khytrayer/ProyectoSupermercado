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
    <a href="{{ route('distribuidors.create') }}">Nuevo distribuidor</a>
</div>

<div>
    <table>
        <thead>
            <tr>
                <th>Id</th><br>
                <th>Nombre</th>              
                <th>Operacions</th>
                </tr>
        </thead>

            <tbody>
            @foreach ($distribuidors as $distribuidor)
            <tr>
                <td>{{ $distribuidor->id }}</td>
                <td>{{ $distribuidor->nombre }}</td>
               
                <td>                
                   <a href="{{ route('distribuidors.show',$distribuidor->id) }}">Mostrar</a> 
                
                            
                   <a href="{{ route('distribuidors.destroy',$distribuidor->id) }}">Borrar</a> 
                
                            
                   <a href="{{ route('distribuidors.edit',$distribuidor->id) }}">Actualizar</a> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
 {{ $distribuidors->links('pagination::bootstrap-4') }}
</div>
</div>
@endsection