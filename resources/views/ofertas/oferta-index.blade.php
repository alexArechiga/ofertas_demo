<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documento</title>
</head>
<body>
    <h1>Lista de ofertas</h1>

    <p>
        <a href="{{ route('ofertas.create') }}">Agregar una nueva oferta</a>
    </p>

    <ul>
        @foreach ($ofertas as $oferta)
            <li>
                <a href="{{ route('ofertas.show', $oferta) }}">{{ $oferta->titulo }}</a> - {{ $oferta->precio_descuento }}
            </li>
        @endforeach
    </ul>
</body>
</html>