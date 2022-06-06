<x-app-layout>
    <div style="max-width: 1280px;
    width: 100%;
    position: relative;
    display: block;
    margin: 0 auto;
    margin-top: 1cm">
    <h1>Editar Empleado</h1>

    <form class="row g-3" action="{{ route('employee.update', $employee->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="col-md-3">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" class="form-control {{$errors->has('name')?'is-invalid':''}}" id="name" name="name" value="{{$employee->name}}">
          @error('name')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="col-md-3">
          <label for="legajo" class="form-label">Legajo</label>
          <input type="text" class="form-control {{$errors->has('legajo')?'is-invalid':''}}" id="legajo" name="legajo" value="{{$employee->id}}">
          @error('legajo')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="col-md-3">
          <label for="dni" class="form-label">DNI</label>
          <input type="text" class="form-control {{$errors->has('dni')?'is-invalid':''}}" id="dni" name="dni" value="{{$employee->dni}}">
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
      <br>
    <br>
    @if (\Session::has('success'))
    <label style="color: green;"> {!! \Session::get('success') !!}</label>
    @endif
      </div>
</x-app-layout>
