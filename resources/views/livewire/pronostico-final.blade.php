<div class="card" style="margin-bottom:10px">
    <div class="card-header text-bg-primary">
        <strong>MI FINAL SOÑADA</strong>
    </div>

    <div class="card-body">
        @if (\Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {!! \Session::get('success') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            @if ($hoy <= $fecha_limite)
            <p>
                Tenés tiempo hasta el
                {{ Carbon\Carbon::parse($fecha_limite)->format('d/m/Y') }}
                para elegir los países que llegarán a la final.
            </p>
            @endif

            <div class="col-md-3">
                <label for="country1_id" class="form-label">¿Qué país ganará la copa?</label>

                <select class="form-select from-control {{ $errors->has('country1_id') ? 'is-invalid' : '' }}"
                        id="country1_id"
                        name="country1_id"
                        wire:model.defer="country1_id"
                        {{ $hoy > $fecha_limite ? 'disabled' : '' }}
                >
                    <option value="">---Seleccione un país---</option>
                    @foreach ($countries as $item)
                        <option value="{{ $item->id }}" {{ $user->country1_id == $item->id ? 'selected' : '' }}>
                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>

                @error('country1_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-3">
                <label for="country2_id" class="form-label">¿Qué país quedará en 2do puesto?</label>

                <select class="form-select from-control {{ $errors->has('country2_id') ? 'is-invalid' : '' }}"
                        id="country2_id"
                        name="country2_id"
                        wire:model.defer="country2_id"
                        {{ $hoy > $fecha_limite ? 'disabled' : '' }}
                >
                    <option value="">---Seleccione un país---</option>
                    @foreach ($countries as $item)
                        <option value="{{ $item->id }}" {{ $user->country2_id == $item->id ? 'selected' : '' }}>
                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>

                @error('country2_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-3">
                <label for="country3_id" class="form-label">¿Qué país quedará en 3er puesto?</label>

                <select class="form-select from-control {{ $errors->has('country3_id') ? 'is-invalid' : '' }}"
                        id="country3_id"
                        name="country3_id"
                        wire:model.defer="country3_id"
                        {{ $hoy > $fecha_limite ? 'disabled' : '' }}
                >
                    <option value="">---Seleccione un país---</option>
                    @foreach ($countries as $item)
                        <option value="{{ $item->id }}" {{ $user->country3_id == $item->id ? 'selected' : '' }}>
                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>

                @error('country3_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-3">
                <label for="country4_id" class="form-label">¿Qué país quedará en 4to puesto?</label>

                <select class="form-select from-control {{ $errors->has('country4_id') ? 'is-invalid' : '' }}"
                        id="country4_id"
                        name="country4_id"
                        wire:model.defer="country4_id"
                        {{ $hoy > $fecha_limite ? 'disabled' : '' }}
                >
                    <option value="">---Seleccione un país---</option>
                    @foreach ($countries as $item)
                        <option value="{{ $item->id }}" {{ $user->country4_id == $item->id ? 'selected' : '' }}>
                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>

                @error('country4_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>

    @if ($hoy <= $fecha_limite)
        <div class="card-footer">
            <button class="btn btn-primary" wire:click="save">Grabar</button>
        </div>
    @endif

</div>
