<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oferta</title>
</head>
<body>
    <h1>Formulario de Oferta</h1>

    <p>
        <a href="{{ route('ofertas.index') }}">Volver a la lista de ofertas</a>
    </p>

    <form action="/ofertas" method="POST">
        @csrf
        <label for="titulo">Titulo:</label>
        <input type="text" id="titulo" name="titulo" value="{{ old('titulo') }}">
        @error('titulo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="vigencia">Vigencia:</label>
        <input type="date" id="vigencia" name="vigencia" value="{{ old('vigencia') }}">
        @error('vigencia')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="tienda">Tienda:</label>
        <input type="text" id="tienda" name="tienda" value="{{ old('tienda') }}">
        @error('tienda')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="precio_original">Precio Original:</label>
        <input id="precio_original" name="precio_original" value="{{ old('precio_original') }}">
        @error('precio_original')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="precio_descuento">Precio Con Descuento:</label>
        <input id="precio_descuento" name="precio_descuento" value="{{ old('precio_descuento') }}">
        @error('precio_descuento')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <input type="submit" value="Agregar">
    </form>
</body>
</html>