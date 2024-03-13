 <div class="container">
        <div class="card">
            <div class="card-header">
                Detalles del ítem
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $viewData['item']->getName() }}</h5>
                <p class="card-text">Descripción: {{ $viewData['item']->description }}</p>
                <p class="card-text">Precio: {{ $viewData['item']->price }}</p>
                <p class="card-text">Stock: {{ $viewData['item']->stock }}</p>

                
                <form action="{{ route('items.destroy', ['id' => $viewData['item']->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>

            </div>
        </div>
    </div>
