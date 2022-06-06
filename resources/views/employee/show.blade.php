<x-app-layout>
    <div class="row"style="max-width: 1280px;
    width: 100%;
    position: relative;
    display: block;
    margin: 0 auto;
    margin-top: 1cm" >
        <div class="col-8">
            <h1>
                <label> Legajo:</label>
               {{ $employee->id }}
               <br>
               <label> Empleado:</label>
                {{ $employee->name }}
                <br>
                <label> Dni:</label>
                {{ $employee->dni }}
            </h1>
            <a href="{{ route('employee.index')}}" class="btn btn-primary">Volver</a>
        </div>

        <div class="col-2">
        </div>
    </div>




</x-app-layout>
