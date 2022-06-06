<x-app-layout>
    <div class="row"style="max-width: 1280px;
    width: 100%;
    position: relative;
    display: block;
    margin: 0 auto;
    margin-top: 1cm" >
        <div class="col-8">
            <h1>
                {{ $match->country1->name }}
                <span class="badge bg-secondary">{{ $match->goals1}}</span>
                -
                <span class="badge bg-secondary">{{ $match->goals2}}</span>
                {{ $match->country2->name }}
            </h1>
            <a href="{{ route('matches.index')}}" class="btn btn-primary">Volver</a>
        </div>

        <div class="col-2">
        </div>
    </div>




</x-app-layout>
