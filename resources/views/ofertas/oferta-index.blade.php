<x-encabezado-h-t-m-l>
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
</x-encabezado-h-t-m-l>