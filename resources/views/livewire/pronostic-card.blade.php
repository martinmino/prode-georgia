
<div class="col-sm-4 col-md-3" style="margin-bottom: 10px">
    <div class="card opacity-{{ ($match->is_over) ? '50' : '100'}} border-{{ $this->color() }}">

        <div class="card-header  text-bg-{{ $this->color() }}">
            <p>
                <strong>Grupo</strong>: {{ $match->group }}
                <br>
                <strong>Fecha</strong>:
                {{ Carbon\Carbon::parse($match->date)->format('d/m/Y') }}
                {{ Carbon\Carbon::parse($match->time)->format('H:i') }} hs.
            </p>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="card border-{{ $this->color() }}">
                        <img class="card-img-top" src="{{asset('img/banderas/' . $country1->id . '.png')}}" alt="{{ $country1->name }}">
                        <label for="goals1" class="form-label text-center"><strong>{{ $country1->name }}</strong></label>
                        <input class="form-control text-center"
                            type="number"
                            name="goals1"
                            id="goals1"
                            min="0"
                            max="99"
                            wire:model="goals1"
                            {{($this->partidoCerrado()) ? 'readonly' : 'required'}}
                        >
                        @error('goals1')
                        <small class="text-danger text-center">{{ $message }}</small>
                        @enderror

                        @if ($this->match->is_over)
                            <h5 class="text-center">
                                <span class="badge text-bg-info">{{ $match->goals1 }}</span>

                                @if ($this->match->penalties_definition)
                                    (<small class="badge text-bg-warning">{{ $match->penalties1 }}</small>)
                                @endif
                            </h5>
                        @endif
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="card border-{{ $this->color() }}">
                        <img class="card-img-top" src="{{asset('img/banderas/' . $country2->id . '.png')}}" alt="{{ $country2->name }}">
                        <label for="goals2" class="form-label text-center"><strong>{{ $country2->name }}</strong></label>
                        <input class="form-control text-center"
                            type="number"
                            name="goals2"
                            id="goals2"
                            min="0"
                            max="99"
                            wire:model="goals2"
                            {{($this->partidoCerrado()) ? 'readonly' : 'required'}}
                        >
                        @error('goals2')
                        <small class="text-danger text-center">{{ $message }}</small>
                        @enderror
                        @if ($this->match->is_over)
                            <h5 class="text-center">
                                <span class="badge text-bg-info">{{ $match->goals2 }}</span>

                                @if ($this->match->penalties_definition)
                                    (<small class="badge text-bg-warning">{{ $match->penalties2 }}</small>)
                                @endif
                            </h5>
                        @endif
                    </div>
                </div>

            </div>

            @if ($match->penalties_definition && $goals1 == $goals2)
            <br>
            <div class="card">
                <div class="card-header">
                    ¿Quién ganará en los penales?
                </div>
                <div class="card-body">
                    <select class="form-select from-control"
                    id="penalties_winner"
                    name="penalties_winner"
                    wire:model.defer="penalties_winner"
                    {{ ($this->partidoCerrado()) ? 'disabled' : '' }}
                >
                        <option value="">---Seleccione un país---</option>

                        <option value="{{ $match->country1->id }}" {{ $match->country1_id === $match->id ? 'selected' : '' }}>
                            {{ $match->country1->name }}
                        </option>

                        <option value="{{ $match->country2->id }}" {{ $match->country2_id === $match->id ? 'selected' : '' }}>
                            {{ $match->country2->name }}
                        </option>

                    </select>

                    @error('penalties_winner')
                        <small class="text-danger text-center">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            @endif

        </div>

        <div class="card-footer">
            @if (!$this->partidoCerrado())

                <button class="form-control btn btn-outline-dark" wire:click="grabar">Enviar</button>

                @if (\Session::has('denied'))
                <small class="text-danger text-center"> {!! \Session::get('denied') !!}</small>
                @endif
                @if (\Session::has('success'))
                <small class="text-success text-center"> {!! \Session::get('success') !!}</small>
                @endif

            @else
            <div class="card border-{{ $this->color()}}">
                @if ($this->match->is_over)

                    <div class="card-body">
                        <h5>
                            Puntos obtenidos:
                            <span class="badge text-bg-{{ $this->color()}}">{{ $pronostic->puntos }}</span>
                        </h5>
                    </div>

                @else

                    <div class="card-body text-center">Esperando resultado final...</div>

                @endif
            </div>
            @endif
        </div>

    </div>

</div>
