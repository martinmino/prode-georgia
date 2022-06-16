<x-app-layout>
    <h2>Tabla de posiciones</h2>
    @livewire('positions-search', ['user' => Auth::user()])
</x-app-layout>
