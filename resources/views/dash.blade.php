<x-app-layout>
    @livewire('pronostico-final', ['user' => Auth::user()])

    <h1>Aqui los pronosticos</h1>

    <div class="row">
    @foreach ($pronostics as $item)
        @livewire('pronostic-card', ['pronostic' => $item])
    @endforeach
    </div>
</x-app-layout>
