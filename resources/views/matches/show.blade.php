<x-app-layout>

        <div class="col-8">
                @foreach ($pronostics as $item)
                <br>
                <h2>
                {{$item->name}}:
                </h2>
                <br>
                <h3>
                {{ $match->country1->name }}
                <span class="badge bg-secondary">{{ $item->goals1}}</span>
                -
                <span class="badge bg-secondary">{{ $item->goals2}}</span>
                {{ $match->country2->name }}
                </h3>
                @endforeach
                <br>
            <a href="{{ route('matches.index')}}" class="btn btn-primary">Volver</a>
        </div>

        <div class="col-2">
        </div>

</x-app-layout>
