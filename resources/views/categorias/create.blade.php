<!-- filepath: /c:/xampp/htdocs/proyecto_laravel/resources/views/categorias/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nueva Categoría</h1>
    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}">
            @error('nombre')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
    </form>
    <a href="{{ route('categorias.index') }}" class="btn btn-secondary mt-3">Volver a la lista de categorías</a>
</div>
@endsection