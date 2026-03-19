<x-encabezado-h-t-m-l>
    <h1>Información de oferta</h1>
    <ul>
        <li><strong>Titulo:</strong> {{ $oferta->titulo }}</li>
        <li><strong>Vigencia:</strong> {{ $oferta->vigencia }}</li>
        <li><strong>Tienda:</strong> {{ $oferta->tienda }}</li>
        <li><strong>Precio Original:</strong> {{ $oferta->precio_original }}</li>
        <li><strong>Precio Con Descuento:</strong> {{ $oferta->precio_descuento }}</li>
    </ul>
    <p>
        <a href="{{ route('ofertas.edit', $oferta) }}">Editar</a><br><br>
        <a href="{{ route('ofertas.index') }}">Volver a la lista de ofertas</a><br>
        <form action="{{ route('ofertas.destroy', $oferta) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </p>
</x-encabezado-h-t-m-l>