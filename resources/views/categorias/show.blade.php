<!-- filepath: /c:/xampp/htdocs/proyecto_laravel/resources/views/categorias/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Categoría</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $categoria->nombre }}</h5>
            <a href="{{ route('categorias.index') }}" class="btn btn-secondary mt-3">Volver a la lista de categorías</a>
        </div>
    </div>
</div>
@endsection