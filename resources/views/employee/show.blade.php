<x-app-layout>
    <div class="row"style="max-width: 1280px;
    width: 100%;
    position: relative;
    display: block;
    margin: 0 auto;
    margin-top: 1cm" >
        <div class="col-8" style="text-align: center; margin:auto">
            <h1 >
                {{$employee->id}}-{{$employee->name}}-{{$employee->dni}}
            </h1>
                @foreach ($pronostics as $item)
                <br>
                <div style="background-color:black; border-radius: 15px; height: 50px; position: relative; align-items:center">
                <h3 style="text-align: center; font-size: 20px;">
               <label style="color: white"> {{$item->partido->country1->name}}</label>
                 <span class="badge bg-secondary" style="color: white">@if ($item->goals1==null)
                    Falta completar
                 @else
                    {{ $item->goals1}}
                 @endif</span>
                -
                <span class="badge bg-secondary" >@if ($item->goals2==null)
                    Falta completar
                 @else
                    {{ $item->goals2}}
                 @endif</span>
                <label style="color: white" >{{$item->partido->country2->name}}</label>
                </h3>
                </div>
                @endforeach

        </div>
    </div>
    <div style="position: sticky; bottom: 0; float:right;">
            <a href="{{ route('employee.index')}}" class="btn btn-primary btn-lg"  >Volver</a>
            </div>
</x-app-layout>
