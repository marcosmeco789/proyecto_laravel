<!-- filepath: /c:/xampp/htdocs/proyecto_laravel/resources/views/productos/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Producto</h1>
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                @if($producto->imagen)
                    <img src="{{ asset('images/' . $producto->imagen) }}" class="card-img" alt="{{ $producto->nombre }}">
                @else
                    <img src="{{ asset('images/default.png') }}" class="card-img" alt="Sin imagen">
                @endif
            </div>
            <div class="col-md-8">
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
    </div>
    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver a la lista de productos</a>
</div>
@endsection