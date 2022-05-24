<x-app-layout>
    <div class="row">
        <div class="col-8">
            <h1>
                {{ $match->country1->name }}
                <span class="badge bg-secondary">{{ $match->goals1}}</span>
                -
                <span class="badge bg-secondary">{{ $match->goals2}}</span>
                {{ $match->country2->name }}
            </h1>
        </div>
        <div class="col-2">

        </div>
    </div>




</x-app-layout>
