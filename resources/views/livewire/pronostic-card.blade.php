<div class="col-sm-4 ">
    <div class="card-columns-fluid " style="margin-bottom: 25px;">
        <div class="card  bg-light" style = "width: 22rem; " >
            <div class="card-body">
                <p>Partido: {{ $match->id }}</p>
                <img class="rounded float-start"  src="img/banderas/{{$country1->id}}.png" alt="{{ $country1->name}}" style="margin-bottom: 40px; margin-right: 20px;">
                <img class="rounded float-start"  src="img/banderas/{{$country2->id}}.png" alt="{{ $country2->name }}" style="margin-bottom: 40px;">
                <div class="input-group-addon ">
                    <label class="card-text" style="margin-left:15px; margin-right:5px;">
                        <b>{{strtoupper(substr($country1->name,0,3))}}</b>
                    </label>
                    <input type="number" name="goals1" min="0" max ="99" wire:model.defer="goals1" required style="width : 40px; heigth : 1px; margin-right:10px;">

                    <label class="card-text" style="margin-left:5px; margin-right:10px;">
                        <b>VS</b>
                    </label>

                    <input type="number" name="goals2"  min="0" max = "99" wire:model.defer="goals2" required style="width : 40px; heigth : 1px ">
                    <label class="card-text" style="margin-left:5px; margin-right:10px;">
                        <b>{{strtoupper(substr($country2->name,0,3))}}</b>
                    </label>
                </div>
                <br>
                <br>
                <button class="btn btn-outline-dark" wire:click="grabar">Enviar</button>
                <br>
                <br>
                @error("goals1")
                    <label style="color: red;">{{$message}}</label>
                @enderror
                @error("goals2")
                    <label style="color: green">{{$message}}</label>
                @enderror
            </div>
        </div>
    </div>
</div>
