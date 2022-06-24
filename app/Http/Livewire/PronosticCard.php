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

    protected $rules = [
        'goals1' => ['required', 'numeric', 'min:0', 'max:99'],
        'goals2' => ['required', 'numeric', 'min:0', 'max:99'],
    ];

    public function messages()
    {
        return [
            'goals1.required' => 'El campo de ' . $this->country1->name . ' esta vacio',
            'goals2.required' => 'El campo de ' . $this->country2->name . ' esta vacio',
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

        if ($this->partidoCerrado())
        {
            return back()->with('denied', 'Ya no puedes modificar el resultado');
        }

        $this->pronostic->goals1 = $this->goals1;
        $this->pronostic->goals2 = $this->goals2;
        $this->pronostic->penalties_winner = $this->penalties_winner;
        $this->pronostic->save();

        return back()->with('success', 'Datos cargados correctamente');
    }
    /**
     * Devuelve si el partido esta cerrado para la carga de resultados
     */
    public function partidoCerrado()
    {
        date_default_timezone_set("America/Argentina/Buenos_Aires");

        //Fecha del partido
        $fechaPartido = date_create($this->match->date . ' ' . $this->match->time);

        return ($this->match->is_over || $fechaPartido < now());
    }
    /**
     * Devuelve un codigo de color de acuerdo al acierto del pronóstico
     */
    public function color()
    {
        if ($this->match->is_over) {
            if ($this->pronostic->aciertos) {
                return 'success';
            }
            elseif ($this->pronostic->puntos > 0) {
                return 'warning';
            }
            else {
                return 'danger';
            }
        }
        else {
            return 'secondary';
        }
    }
}
