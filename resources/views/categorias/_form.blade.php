<div class="form-group">
    <label for="nombre">Nombre de la categoría:</label>
    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $categoria->nombre ?? '') }}">
    @error('nombre')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>