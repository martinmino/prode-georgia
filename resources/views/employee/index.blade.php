<x-app-layout>
    <div style="max-width: 1280px;
    width: 100%;
    position: relative;
    display: block;
    margin: 0 auto;
    margin-top: 1cm">
    <h1>Empleados</h1>
    <table class="table table-striped table-hover table-bordered table-sm">
        <thead>
            <tr>
                <td colspan="11" class="text-end">
                    <a href="{{ route('employee.create')}}" class="btn btn-primary btn-sm">Nuevo</a>
                </td>
            </tr>
            <tr>
                <th>Legajo</th>
                <th>Nombre</th>
                <th>Dni</th>
            </tr>
             </thead>
             <tbody class="table-group-divider">
            @foreach ($employee as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->dni }}</td>
                <td style="white-space: nowrap; width: 14%;">
                    <a href="{{ route('employee.show', $item->id)}}" class="btn btn-primary btn-sm" style="float:left; margin-right:10px;">Ver</a>
                    <a href="{{ route('employee.edit', $item->id)}}" class="btn btn-primary btn-sm" style=" float:left; margin-right:10px;">Editar</a>
                    <form   action="{{ route('employee.destroy',$item->id)}}" method="POST" style="float:left;">
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
