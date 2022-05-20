<x-app-layout>
    <h1>Partidos</h1>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Fecha</th>
                <th>Pais 1</th>
                <th>Goles P1</th>
                <th>Goles P2</th>
                <th>Pais 2</th>
                <th>Grupo</th>
                <th>Fase</th>
                <th>Fecha Inicio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matches as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->date }}</td>
                <td>{{ $item->country1->name }}</td>
                <td>{{ $item->goals1 }}</td>
                <td>{{ $item->goals2 }}</td>
                <td>{{ $item->country2->name }}</td>
                <td>{{ $item->group }}</td>
                <td>{{ $item->phase }}</td>
                <td>{{ $item->active_from }}</td>
                <td>
                    <a href="{{ route('matches.edit', $item->id)}}" class="btn btn-primary btn-sm">Editar</a>
                    <a href="{{ route('matches.destroy', $item->id)}}" class="btn btn-danger btn-sm">Borrar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-app-layout>
