<!-- filepath: /c:/xampp/htdocs/proyecto_laravel/resources/views/categorias/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Categoría</h1>
    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $categoria->nombre }}">
            @error('nombre')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
    </form>
    <a href="{{ route('categorias.index') }}" class="btn btn-secondary mt-3">Volver a la lista de categorías</a>
</div>
@endsection