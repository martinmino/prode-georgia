<div class="col-sm-4 ">
    <div class="card-columns-fluid " style="margin-bottom: 25px;">
        <div class="card  bg-light" style = "width: 22rem; " >
            <div class="card-body">
                <p style = "float: left; margin-right: 20px;">Partido: {{ $match->id }}</p><p >Grupo: {{ $match->group }}</p>
                <img class="rounded float-start"  src="img/banderas/{{$country1->id}}.png" alt="{{ $country1->name}}" style="margin-bottom: 40px; margin-right: 20px;">
                <img class="rounded float-start"  src="img/banderas/{{$country2->id}}.png" alt="{{ $country2->name }}" style="margin-bottom: 40px;">
                <div class="input-group-addon ">
                    <label class="card-text" style="margin-left:15px; margin-right:5px;">
                        <b>{{strtoupper(substr($country1->name,0,3))}}</b>
                    </label>
                    <input type="number" name="goals1" min="0" max ="99" wire:model.defer="goals1" required style="width : 40px; heigth : 1px; margin-right:10px;"{{$hoy>$match->date?'disabled':''}}>

                    <label class="card-text" style="margin-left:5px; margin-right:10px;">
                        <b>VS</b>
                    </label>

                    <input type="number" name="goals2"  min="0" max = "99" wire:model.defer="goals2" required style="width : 40px; heigth : 1px " {{$hoy>$match->date?'disabled':''}}>
                    <label class="card-text" style="margin-left:5px; margin-right:10px;">
                        <b>{{strtoupper(substr($country2->name,0,3))}}</b>
                    </label>
                </div>
                <br>
                <br>
                @if ($match->date > $hoy)
                    <button class="btn btn-outline-dark" wire:click="grabar">Enviar</button>
                @endif
                <br>
                <br>
                <p style = "float: left; margin-right: 20px; "><b> Fecha: {{Carbon\Carbon::parse($match->date)->format('d/m/Y') }}</b></p><p > <b>Horario: {{ $match->time }}hs</b></p>
                @if ($match->date<$hoy)
                    <p><b>Resultado : {{$match->goals1}} - {{$match->goals2}}</b></p>
                @endif
                @error("goals1")
                <br>
                <br>
                    <label style="color: red;">{{$message}}</label>
                @enderror
                @error("goals2")
                <br>
                <br>
                    <label style="color: red;">{{$message}}</label>
                @enderror
                @if (\Session::has('success'))
                       <label style="color: green;"> {!! \Session::get('success') !!}</label>
                @endif
            </div>
        </div>
    </div>
</div>
