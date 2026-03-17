<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Información de oferta</h1>
    <ul>
        <li><strong>Titulo:</strong> {{ $oferta->titulo }}</li>
        <li><strong>Vigencia:</strong> {{ $oferta->vigencia }}</li>
        <li><strong>Tienda:</strong> {{ $oferta->tienda }}</li>
        <li><strong>Precio Original:</strong> {{ $oferta->precio_original }}</li>
        <li><strong>Precio Con Descuento:</strong> {{ $oferta->precio_descuento }}</li>
    </ul>
    <p>
        <a href="{{ route('ofertas.edit', $oferta) }}">Editar</a>
        <form action="{{ route('ofertas.destroy', $oferta) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </p>
</body>
</html>