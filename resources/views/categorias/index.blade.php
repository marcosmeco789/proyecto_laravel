<!-- filepath: /c:/xampp/htdocs/proyecto_laravel/resources/views/categorias/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Categorías</title>
</head>
<body>
    <h1>Lista de Categorías</h1>
    <a href="{{ route('categorias.create') }}">Crear Nueva Categoría</a>
    <ul>
        @foreach ($categorias as $categoria)
            <li>
                <a href="{{ route('categorias.show', $categoria->id) }}">{{ $categoria->nombre }}</a>
                <a href="{{ route('categorias.edit', $categoria->id) }}">Editar</a>
                <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar esta categoría?')">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>