<x-app-layout >
    <h2>Tabla de posiciones</h2>

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
            @foreach ($table as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->aciertos }}</td>
                    <td>{{ $item->puntos }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app-layout>
