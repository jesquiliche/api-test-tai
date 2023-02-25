<form>
    @csrf
    <div class="card col-md-4 p-4 shadow-lg">
    <div class="form-group">
        <label for="bloque">Selecciona un bloque:</label>
        <select class="form-control" id="bloque" name="bloque">
            @foreach ($bloques as $bloque)
                <option value="{{ $bloque->id }}">{{ $bloque->nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="categoria">Selecciona una categoria:</label>
        <select class="form-control" id="categoria" name="categoria">
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }} ({{ $categoria->bloque->nombre }})</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>