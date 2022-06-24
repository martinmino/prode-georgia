<x-app-layout>
    @livewire('pronostico-final', ['user' => Auth::user()])

    <div class="row">
        @foreach ($pronostics as $pronostic)
            @livewire('pronostic-card', ['pronostic' => $pronostic])
        @endforeach
    </div>

</x-app-layout>
