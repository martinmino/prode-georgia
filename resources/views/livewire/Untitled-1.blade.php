<div class="col-sm-4 ">
    <div class="card-columns-fluid " style="margin-bottom: 25px;">
        <div class="card  bg-light" style = "width: 22rem; " >
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
        </div>
    </div>
</div>


<div class="col-sm-3" style="margin-bottom: 2rem">
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Match #{{  $match->id  }}</h5>
            <p class="card-text">
                {{  $country1->name }}
                -
                {{  $country2->name  }}
            </p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
</div>
