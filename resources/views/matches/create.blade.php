<x-app-layout>
    <div  style="max-width: 1280px;
    width: 100%;
    position: relative;
    display: block;
    margin: 0 auto;
    margin-top: 1cm">
    <h1>Crear nuevo partido</h1>

    <form class="row g-3" action="{{ route('matches.store')}}" method="POST">
        @csrf

        <div class="col-md-3">
          <label for="date" class="form-label">Fecha</label>
          <input type="date" class="form-control {{$errors->has('date')?'is-invalid':''}}" id="date" name="date" value="{{old('date')}}">
          @error('date')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="col-md-3">
          <label for="time" class="form-label">Hora</label>
          <input type="time" class="form-control {{$errors->has('time')?'is-invalid':''}}" id="time" name="time" value="{{old('time')}}">
          @error('time')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="col-md-3">
          <label for="group" class="form-label">Grupo</label>
          <input type="text" class="form-control {{$errors->has('group')?'is-invalid':''}}" id="group" name="group" value="{{old('group')}}">
          @error('group')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="col-md-3">
          <label for="phase" class="form-label">Fase</label>
          <input type="text" class="form-control {{$errors->has('phase')?'is-invalid':''}}" id="phase" name="phase" value="{{old('phase')}}">
          @error('phase')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="col-md-6">
          <label for="country1_id" class="form-label">Pais 1</label>
          <select class="form-select from-control {{$errors->has('country1_id')?'is-invalid':''}}" id="country1_id" name="country1_id">
              <option value="">---Seleccione un país---</option>
              @foreach ($countries as $item)
              <option value="{{ $item->id }}" {{old('country1_id')==$item->id?'selected':''}}>{{ $item->name }}</option>
              @endforeach
            </select>
            @error('country1_id')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="country2_id" class="form-label">Pais 2</label>
            <select class="form-select from-control {{$errors->has('country2_id')?'is-invalid':''}}" id="country2_id" name="country2_id">
                <option value="">---Seleccione un país---</option>
                @foreach ($countries as $item)
                <option value="{{ $item->id }}" {{old('country2_id')==$item->id?'selected':''}}>{{ $item->name }}</option>
                @endforeach
          </select>
          @error('country2_id')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="col-3">
          <label for="active_since" class="form-label">Fecha desde</label>
          <input type="date" class="form-control {{$errors->has('active_since')?'is-invalid':''}}" id="active_since" name="active_since" value="{{old('active_since')}}">
          @error('active_since')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Grabar</button>
          <a href="{{ route('matches.index')}}" class="btn btn-primary">Volver</a>
        </div>
      </form>
      @if (\Session::has('success'))
    <label style="color: green;"> {!! \Session::get('success') !!}</label>
    @endif
    </div>
</x-app-layout>
