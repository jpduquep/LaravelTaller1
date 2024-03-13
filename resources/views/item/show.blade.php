

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista de ítems</div>

                    <div class="card-body">
                        @if ($viewData['item']->isEmpty())
                            <p>No hay ítems para mostrar.</p>
                        @else
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Precio</th>
                                        <th>Stock</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($viewData['item'] as $item)
                                        <tr>
                                            <td>{{ $item->getId() }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->stock }}</td>
                                            <td><a href="{{ route('items.show', ['id' => $item->id]) }}" class="btn btn-primary">Ver detalles</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
