<x-app-layout >
    @livewire('pronostico-final', ['user' => Auth::user()])

    <h1>Aqui los pronosticos</h1>

    <div class="row">
        <div class="card-group">
        @foreach ($pronostics as $pronostic)
            @livewire('pronostic-card', ['pronostic' => $pronostic])
        @endforeach
        </div>
    </div>

</x-app-layout>




