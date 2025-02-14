@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Producto</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $producto->nombre }}</h5>
            <p class="card-text"><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
            <p class="card-text"><strong>Precio:</strong> {{ $producto->precio }} €</p>
            <p class="card-text"><strong>Stock:</strong> {{ $producto->stock }}</p>
            <p class="card-text"><strong>Categoría:</strong> {{ $producto->categoria->nombre }}</p>
            <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary">Editar</a>
            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection