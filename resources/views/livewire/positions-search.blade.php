<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="px-6 py-4" style="width: 65%">
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
                    <tr id={{ $item->id }}
                        style={{ $item->name == $user->name ? 'background-color:yellow' : '' }}>
                        <td>{{ $item->position }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->aciertos }}</td>
                        <td>{{ $item->puntos }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div class="card" style="width: 15rem; height:10rem; margin-left:7rem; ">
        <div class="card-body">
            <a href="#{{ $user->id }}" style="text-decoration:none; color:black">
                <h5 class="card-title">{{ $user->name }}</h5>
            </a>
            <label for="">Posicion: {{ $user->position }}</label>
            <br>
            @foreach ($posts2 as $item)
                <label>Puntaje: {{ $item->puntos }}</label>
                <br>
                <label>Aciertos: {{ $item->aciertos }}</label>
            @endforeach
        </div>
    </div>
