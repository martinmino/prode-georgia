<x-app-layout>
    <div style="max-width: 1280px;
    width: 100%;
    position: relative;
    display: block;
    margin: 0 auto;
    margin-top: 1cm">
    <h1>Partidos</h1>

    <table class="table table-striped table-hover table-bordered table-sm">
        <thead>
            <tr>
                <td colspan="11" class="text-end">
                    <a href="{{ route('matches.create')}}" class="btn btn-primary btn-sm">Nuevo</a>

                </td>
            </tr>
            <tr>
                <th>#</th>
                <th>Fecha</th>
                <th>Hora</th>
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
        <tbody class="table-group-divider">
            @foreach ($matches as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->date }}</td>
                <td>{{ $item->time }}</td>
                <td>{{ $item->country1->name }}</td>
                <td>{{ $item->goals1 }}</td>
                <td>{{ $item->goals2 }}</td>
                <td>{{ $item->country2->name }}</td>
                <td>{{ $item->group }}</td>
                <td>{{ $item->phase }}</td>
                <td>{{ $item->active_since }}</td>
                <td style="white-space: nowrap; width: 14%;">
                    <a href="{{ route('matches.show', $item->id)}}" class="btn btn-primary btn-sm" style="float:left; margin-right:10px;">Ver</a>
                    <a href="{{ route('matches.edit', $item->id)}}" class="btn btn-primary btn-sm" style=" float:left; margin-right:10px;">Editar</a>
                    <form  style = "float: right;" action="{{ route('matches.destroy',$item->id)}}" method="POST" style="float:left;">
                        @csrf
                        @method('delete')
                        <button type = "submit" class="btn btn-danger btn-sm" >Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>

