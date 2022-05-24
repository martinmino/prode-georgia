<x-app-layout>
    @livewire('pronostico-final', ['user' => Auth::user()])

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('mensaje'))
            {{session('mensaje')}}
            @endif
            @foreach ($partido as $partidos)
                <form action="{{route('dashboard.store')}}" method="POST">
                @csrf
                    <ul>
                        <li>
                            <label >
                                {{$partidos->country1->name}}
                                <input type="number"  name="paisa{{$partidos->id}}" min="0" max ="99" value="{{old("paisa$partidos->id")}}" required>
                                <input type="number" name="paisb{{$partidos->id}}"  min="0" max = "99" value="{{old("paisb$partidos->id")}}"required>
                                <input name="id" type="hidden" value={{$partidos->id}}>
                                {{$partidos->country2->name}}
                            </label>
                        </li>
                        <br>
                        <button>Enviar</button>
                    </ul>
                    @error("paisa$partidos->id")
                        {{$message}}
                    @enderror
                </form>
            @endforeach
        </div>
    </div>
</x-app-layout>
