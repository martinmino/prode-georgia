<x-app-layout >
    @livewire('pronostico-final', ['user' => Auth::user()])
<div style="    max-width: 1280px;
    width: 100%;
    position: relative;
    display: block;
    margin: 0 auto;">
    <h1>Aqui los pronosticos</h1>

    <div class="row">
        <div class="card-group">
        @foreach ($pronostics as $pronostic)
            @livewire('pronostic-card', ['pronostic' => $pronostic])
        @endforeach
        </div>
    </div>
</div>
</x-app-layout>




