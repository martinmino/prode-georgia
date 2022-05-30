<x-app-layout>
    <style>
        input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
    </style>
    <div class="container">
        <div class="card-group">
                @foreach ($partido as $partidos)
                    <br>
            <div class="col-sm-4 ">
                <div class="card-columns-fluid " style="margin-bottom: 25px;">
                    <div class="card  bg-light" style = "width: 22rem; " >
                        <form  action="{{route('dashboard.store')}}" method="POST">
                            @csrf
                            <div class="card-body">
                            <img class="rounded float-start"  src="https://www.georgia.com.ar/prode/public/banderas/{{$partidos->country1_id}}.png" alt="Card image cap" style="margin-bottom: 40px; margin-right: 20px;">
                            <img class="rounded float-start"  src="https://www.georgia.com.ar/prode/public/banderas/{{$partidos->country2_id}}.png"  alt="Card image cap" style="margin-bottom: 40px;">
                                <div class="input-group-addon ">
                                    <label class="card-text" style="margin-left:15px; margin-right:5px;"><b>{{strtoupper(substr($partidos->Paises->name,0,3))}}</b></label>
                                    <input type="number" name="paisa{{$partidos->id}}" min="0" max ="99" value="{{old("paisa$partidos->id")}}" required style="width : 40px; heigth : 1px; margin-right:10px;">
                                    <label class="card-text" style="margin-left:5px; margin-right:10px;"><b>VS</b></label>
                                    <input type="number" name="paisb{{$partidos->id}}"  min="0" max = "99" value="{{old("paisb$partidos->id")}}"required style="width : 40px; heigth : 1px ">
                                    <label class="card-text" style="margin-left:5px; margin-right:10px;"><b>{{strtoupper(substr($partidos->Paises2->name,0,3))}}</b></label>
                                </div>
                                <input name="id" type="hidden" value={{$partidos->id}}>
                                <br>
                                <br>
                                <button  class="btn btn-outline-dark">Enviar</button>
                                <br>
                                <br>
                                @error("paisa$partidos->id")
                                    <label style="color: red;">{{$message}}</label>
                                @enderror
                                @error("paisb$partidos->id")
                                    <label style="color: green">{{$message}}</label>
                                @enderror
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            @endforeach
    </div>
</x-app-layout>
