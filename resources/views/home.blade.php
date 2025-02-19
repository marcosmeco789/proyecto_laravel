<!-- filepath: /c:/xampp/htdocs/proyecto_laravel/resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <!-- Hero Section -->
    <div class="jumbotron text-center text-black">
        <h1 class="display-4">Bienvenido a FitMatch</h1>
        <p class="lead">Encuentra los mejores suplementos y equipamiento deportivo para alcanzar tus metas.</p>
       
    </div>
<br>
<br>
    <!-- Products Section -->
    <div class="row justify-content-center text-center">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Suplementos</h5>
                    <p class="card-text">Descubre nuestra amplia gama de suplementos para mejorar tu rendimiento.</p>
                    <a href="#" class="btn btn-primary">Ver Productos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Ropa Deportiva</h5>
                    <p class="card-text">Explora nuestra colección de ropa deportiva para todos los deportes.</p>
                    <a href="#" class="btn btn-primary">Ver Productos</a>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>

    <!-- Call to Action Section -->
    <div class="row text-center mt-5">
        <div class="col-md-12">
            <h2>Únete a FitMatch Hoy</h2>
            <p>Regístrate ahora y comienza tu viaje hacia una vida más saludable y activa.</p>
            <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Regístrate</a>
        </div>
    </div>
</div>
@endsection