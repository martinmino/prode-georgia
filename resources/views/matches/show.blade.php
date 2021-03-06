<x-app-layout>
    <div class="row"style="max-width: 1280px;
    width: 100%;
    position: relative;
    display: block;
    margin: 0 auto;
    margin-top: 1cm" >
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
        </div>
    </div>

<div style="position: sticky; bottom: 0; float:right;">
    <a href="{{ route('matches.index')}}" class="btn btn-primary btn-lg">Volver</a>
</div>

</x-app-layout>
