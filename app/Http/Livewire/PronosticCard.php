<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pronostic;
use App\Models\Partido;
use App\Models\Country;

class PronosticCard extends Component
{
    public Pronostic $pronostic;
    public $goals1;
    public $goals2;
    public Partido $match;
    public Country $country1;
    public Country $country2;

    protected $rules = [
        'goals1' => ['required', 'numeric', 'min:0', 'max:99'],
        'goals2' => ['required', 'numeric', 'min:0', 'max:99'],
    ];

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
    }
    public function grabar()
    {
        $this->validate();

        $this->pronostic->goals1 = $this->goals1;
        $this->pronostic->goals2 = $this->goals2;
        $this->pronostic->save();
    }
}
