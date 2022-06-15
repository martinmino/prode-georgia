<div>
    {{-- <div class="px-6 py-4">
        <input type="text" placeholder="Encuentra tu posicion" wire:model="search">
    </div> --}}
    <table class="table table-striped table-hover table-bordered table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Jugador</th>
                <th>Aciertos Exactos</th>
                <th>Puntos</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($posts as $item)
                <tr>
                    <td>{{ $item->position }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->aciertos }}</td>
                    <td>{{ $item->puntos }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
