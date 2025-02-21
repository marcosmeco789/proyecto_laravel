<!-- filepath: /c:/xampp/htdocs/proyecto_laravel/resources/views/productos/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Producto</h1>
    <form action="{{ route('productos.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $producto->nombre }}">
            @error('nombre')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" class="form-control">{{ $producto->descripcion }}</textarea>
            @error('descripcion')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="precio">Precio (€):</label>
            <input type="number" step="0.01" name="precio" id="precio" class="form-control" value="{{ $producto->precio }}">
            @error('precio')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="number" name="stock" id="stock" class="form-control" value="{{ $producto->stock }}">
            @error('stock')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="categoria_id">Categoría:</label>
            <select name="categoria_id" id="categoria_id" class="form-control">
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ $producto->categoria_id == $categoria->id ? 'selected' : '' }}>
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
            @error('categoria_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen" class="form-control">
            {{-- @if($producto->imagen)
                <img src="{{ asset('images/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" width="100">
            @endif --}}
            @error('imagen')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
    </form>
</div>
@endsection