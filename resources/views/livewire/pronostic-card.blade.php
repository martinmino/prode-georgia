<div class="col-sm-4 ">
    <div class="card-columns-fluid " style="margin-bottom: 25px;">
        <div class="card  bg-light" style="width: 22rem; ">
            <div class="card-body">
                <p style="float: left; margin-right: 20px;">Partido: {{ $match->id }}</p>
                <p>Grupo: {{ $match->group }}</p>
                <img class="rounded float-start" src="img/banderas/{{ $country1->id }}.png"
                    alt="{{ $country1->name }}" style="margin-bottom: 40px; margin-right: 20px;">
                <img class="rounded float-start" src="img/banderas/{{ $country2->id }}.png"
                    alt="{{ $country2->name }}" style="margin-bottom: 40px;">
                <div class="input-group-addon ">
                    <label class="card-text" style="margin-left:15px; margin-right:5px;">
                        <b>{{ strtoupper(substr($country1->name, 0, 3)) }}</b>
                    </label>
                    <input type="number" name="goals1" id="goals1" min="0" max="99" wire:model.defer="goals1" required
                        style="width : 40px; heigth : 1px; margin-right:10px;"
                        {{ $hoy >= $match->date ? ($hoy == $match->date && $hoyHoras < $match->time ? '' : 'disabled') : '' }}
                        wire:model="Penalties1">

                    <label class="card-text" style="margin-left:5px; margin-right:10px;">
                        <b>VS</b>
                    </label>

                    <input type="number" name="goals2" id="goals2" min="0" max="99" wire:model.defer="goals2" required
                        style="width : 40px; heigth : 1px "
                        {{ $hoy >= $match->date ? ($hoy == $match->date && $hoyHoras < $match->time ? '' : 'disabled') : '' }}
                        wire:model="Penalties2">
                    <label class="card-text" style="margin-left:5px; margin-right:10px;">
                        <b>{{ strtoupper(substr($country2->name, 0, 3)) }}</b>
                    </label>
                </div>
                <br>
                @if ($goals2 != null && $goals1 != null && $pronostic->penalties_definition)
                    @if ($Penalties1 == $Penalties2)
                        <label for="penalties_winner" class="form-label">¿Quien Gano en los Penales?</label>
                        <div class="col-md-5" id='div1'>
                            <select class="form-select from-control" id="penalties_winner" name="penalties_winner"
                                readonly wire:model.defer="penalties_winner"
                                {{ $hoy >= $match->date ? ($hoy == $match->date && $hoyHoras < $match->time ? '' : 'disabled') : '' }}>
                                <option value="{{ $match->country1->id }}"
                                    {{ $match->country1_id == $match->id ? 'selected' : '' }}>
                                    {{ $match->country1->name }}
                                </option>
                                <option value="{{ $match->country2->id }}"
                                    {{ $match->country2_id == $match->id ? 'selected' : '' }}>
                                    {{ $match->country2->name }}
                                </option>
                            </select>
                        </div>
                    @endif
                @endif

                <br>
                @if ($hoy <= $match->date)
                    @if ($hoy == $match->date && $hoyHoras > $match->time)
                    @else
                        <button class="btn btn-outline-dark" wire:click="grabar">Enviar</button>
                    @endif
                @endif
                <br>
                <br>
                <p style="float: left; margin-right: 20px; "><b> Fecha:
                        {{ Carbon\Carbon::parse($match->date)->format('d/m/Y') }}</b></p>
                <p> <b>Horario: {{ $match->time }}hs</b></p>

                @if ($match->is_over)
                    <p><b>Resultado : {{ $match->goals1 }} - {{ $match->goals2 }}</b></p>
                @endif

                @error('goals1')
                    <br>
                    <br>
                    <label style="color: red;">{{ $message }}</label>
                @enderror
                @error('goals2')
                    <br>
                    <br>
                    <label style="color: red;">{{ $message }}</label>
                @enderror
                @if (\Session::has('success'))
                    <label style="color: green;"> {!! \Session::get('success') !!}</label>
                @endif
                @if (\Session::has('denied'))
                    <label style="color: red;"> {!! \Session::get('denied') !!}</label>
                @endif

            </div>
        </div>
    </div>
</div>
