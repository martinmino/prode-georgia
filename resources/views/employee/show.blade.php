<x-app-layout>
    <div class="row"style="max-width: 1280px;
    width: 100%;
    position: relative;
    display: block;
    margin: 0 auto;
    margin-top: 1cm" >
        <div class="col-8">
            <h1>
                {{$employee->id}}-{{$employee->name}}-{{$employee->dni}}
            </h1>
                @foreach ($pronostics as $item)
                <br>
                <h3>
                {{$item->partido->country1->name}}
                 <span class="badge bg-secondary">@if ($item->goals1==null)
                    Falta completar
                 @else
                    {{ $item->goals1}}
                 @endif</span>
                -
                <span class="badge bg-secondary">@if ($item->goals2==null)
                    Falta completar
                 @else
                    {{ $item->goals2}}
                 @endif</span>
                {{$item->partido->country2->name}}
                </h3>
                @endforeach
            <a href="{{ route('employee.index')}}" class="btn btn-primary">Volver</a>
        </div>

        <div class="col-2">
        </div>
    </div>
</x-app-layout>
