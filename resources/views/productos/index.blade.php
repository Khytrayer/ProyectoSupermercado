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
    <a href="{{ route('productos.create') }}">Nuevo Producto</a>
</div>
@include('productos.search')
<div>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>  
                <th>Precio</th> 
                <th>Distribuidor</th>            
                <th>Operaciones</th>
                </tr>
        </thead>

            <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->precio }}</td>
                <td>{{ $producto->distribuidor->nombre }}</td>
               
                <td>                
                   <a href="{{ route('productos.show',$producto->id) }}">Mostrar</a> 
                
                            
                   <a href="{{ route('productos.destroy',$producto->id) }}">Borrar</a> 
                
                            
                   <a href="{{ route('productos.edit',$producto->id) }}">Actualizar</a> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $productos->links('pagination::bootstrap-4') }}
@endsection