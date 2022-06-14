<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pronostic;
use App\Models\Partido;
use App\Models\Country;
use Illuminate\Validation\ValidationException;
use Carbon\Carbon;


class PronosticCard extends Component
{
    public Pronostic $pronostic;
    public $goals1;
    public $goals2;
    public $penalties_winner;
    public Partido $match;
    public Country $country1;
    public Country $country2;
    public $hoy;
    public $Penalties1;
    public $Penalties2;
    protected $rules = [
        'goals1' => ['required', 'numeric', 'min:0', 'max:99'],
        'goals2' => ['required', 'numeric', 'min:0', 'max:99'],
        'penalties_winner' => [
            'required'
        ],
    ];



    public function messages()
    {
        return [
            'goals1.required' => 'El campo de ' . $this->country1->name . ' esta vacio',
            'goals2.required' => 'El campo de ' . $this->country2->name . ' esta vacio',
            'penalties_winner.required' => 'El campo de ganador de los penales esta vacio',
            'goals1.max' => 'El campo de ' . $this->country1->name . ' debe ser menor a 100',
            'goals2.max' => 'El campo de ' . $this->country2->name . ' debe ser menor a 100',
            'goals1.min' => 'El campo de ' . $this->country1->name . ' debe ser mayor a 0',
            'goals2.min' => 'El campo de ' . $this->country2->name . ' debe ser mayor a 0',

        ];
    }

    public function render()
    {
        return view('livewire.pronostic-card');
    }


    public function mount()
    {
        $this->hoy = Carbon::now('America/Argentina/Buenos_Aires')->format('Y-m-d');
        $this->hoyHoras = Carbon::now('America/Argentina/Buenos_Aires')->format('H:i:s');
        $this->match = Partido::find($this->pronostic->match_id);
        $this->country1 = Country::find($this->match->country1_id);
        $this->country2 = Country::find($this->match->country2_id);


        $this->goals1 = $this->pronostic->goals1;
        $this->goals2 = $this->pronostic->goals2;
        $this->penalties_winner = $this->pronostic->penalties_winner;
    }
    public function grabar()
    {
        $this->validate();
        $hoy = Carbon::now('America/Argentina/Buenos_Aires')->format('Y-m-d');
        $hoyHoras = Carbon::now('America/Argentina/Buenos_Aires')->format('H:i:s');
        if ($hoy <= $this->match->date) {
            if ($hoy == $this->match->date && $hoyHoras > $this->match->time) {
                return back()->with('denied', 'Ya no puedes modificar el resultado');
            } else {
                $this->pronostic->goals1 = $this->goals1;
                $this->pronostic->goals2 = $this->goals2;
                $this->pronostic->penalties_winner = $this->penalties_winner;
                $this->pronostic->save();
                return back()->with('success', 'Datos cargados correctamente');
            }
            return back()->with('denied', 'Ya no puedes modificar el resultado');
        }
    }
}
