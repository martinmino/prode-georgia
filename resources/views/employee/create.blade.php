<x-app-layout>
    <div  style="max-width: 1280px;
    width: 100%;
    position: relative;
    display: block;
    margin: 0 auto;
    margin-top: 1cm">
    <h1>Crear nuevo usuario</h1>

    <form class="row g-3" action="{{ route('employee.store')}}" method="POST">
        @csrf
        <div class="col-md-3">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" class="form-control {{$errors->has('name')?'is-invalid':''}}" id="name" name="name" value="{{old('name')}}">
          @error('name')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="col-md-3">
          <label for="legajo" class="form-label">Legajo</label>
          <input type="text" class="form-control {{$errors->has('legajo')?'is-invalid':''}}" id="legajo" name="legajo" value="{{old('legajo')}}">
          @error('legajo')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="col-md-3">
          <label for="dni" class="form-label">DNI</label>
          <input type="text" class="form-control {{$errors->has('dni')?'is-invalid':''}}" id="dni" name="dni" value="{{old('dni')}}">
          @error('dni')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Grabar</button>
          <a href="{{ route('employee.index')}}" class="btn btn-primary">Volver</a>
        </div>
      </form>
      @if (\Session::has('success'))
    <label style="color: green;"> {!! \Session::get('success') !!}</label>
    @endif
    </div>
</x-app-layout>
