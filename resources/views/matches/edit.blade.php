<x-app-layout>

    <h1>Editar partido</h1>

    <form class="row g-3" action="{{ route('matches.update', $match->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="col-md-3">
          <label for="date" class="form-label">Fecha</label>
          <input type="date" class="form-control {{$errors->has('date')?'is-invalid':''}}" id="date" name="date" value="{{$match->date}}">
          @error('date')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="col-md-3">
          <label for="time" class="form-label">Hora</label>
          <input type="time" class="form-control {{$errors->has('time')?'is-invalid':''}}" id="time" name="time" value="{{$match->time}}">
          @error('time')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="col-md-3">
          <label for="group" class="form-label">Grupo</label>
          <input type="text" class="form-control {{$errors->has('group')?'is-invalid':''}}" id="group" name="group" value="{{$match->group}}">
          @error('group')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="col-md-3">
          <label for="phase" class="form-label">Fase</label>
          <input type="text" class="form-control {{$errors->has('phase')?'is-invalid':''}}" id="phase" name="phase" value="{{$match->phase}}">
          @error('phase')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="col-md-5">
          <label for="country1_id" class="form-label">Pais 1</label>
          <select class="form-select from-control {{$errors->has('country1_id')?'is-invalid':''}}" id="country1_id" name="country1_id" readonly>
              <option value="">---Seleccione un país---</option>
              @foreach ($countries as $item)
              <option value="{{ $item->id }}" {{$match->country1_id==$item->id?'selected':''}}>{{ $item->name }}</option>
              @endforeach
            </select>
            @error('country1_id')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="col-md-1">
            <label for="group" class="form-label">Goles</label>
            <input type="number" class="form-control {{$errors->has('goals1')?'is-invalid':''}}" id="goals1" name="goals1" value="{{$match->goals1}}" min="0" max="99">
            @error('goals1')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="col-md-5">
            <label for="country2_id" class="form-label">Pais 2</label>
            <select class="form-select from-control {{$errors->has('country2_id')?'is-invalid':''}}" id="country2_id" name="country2_id" readonly>
                <option value="">---Seleccione un país---</option>
                @foreach ($countries as $item)
                <option value="{{ $item->id }}" {{$match->country2_id==$item->id?'selected':''}}>{{ $item->name }}</option>
                @endforeach
          </select>
          @error('country2_id')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="col-md-1">
            <label for="group" class="form-label">Goles</label>
            <input type="number" class="form-control {{$errors->has('goals2')?'is-invalid':''}}" id="goals2" name="goals2" value="{{$match->goals2}}"  min="0" max="99">
            @error('goals2')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="col-3">
          <label for="active_since" class="form-label">Fecha desde</label>
          <input type="date" class="form-control {{$errors->has('active_since')?'is-invalid':''}}" id="active_since" name="active_since" value="{{$match->active_since}}">
          @error('active_since')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="is_over" value="{{$match->is_over}}" id="is_over" {{$match->is_over?'checked':''}}>
              <label class="form-check-label" for="is_over">
                Partido finalizado
              </label>
            </div>
          </div>

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Grabar</button>
          <a href="{{ route('matches.index')}}" class="btn btn-primary">Volver</a>
        </div>
      </form>
      <br>
    <br>
    @if (\Session::has('success'))
    <label style="color: green;"> {!! \Session::get('success') !!}</label>
    @endif

</x-app-layout>
