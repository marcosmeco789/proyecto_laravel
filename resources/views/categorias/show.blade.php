<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Categoría</title>
</head>
<body>
    <h1>Detalles de la Categoría</h1>
    <p><strong>Nombre:</strong> {{ $categoria->nombre }}</p>
    <a href="{{ route('categorias.index') }}">Volver a la lista de categorías</a>
</body>
</html>