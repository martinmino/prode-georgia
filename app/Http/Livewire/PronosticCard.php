<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pronostic;
use App\Models\Match;
use App\Models\Country;

class PronosticCard extends Component
{
    public Pronostic $pronostic;
    public Match $match;
    public Country $country1;
    public Country $country2;

    public function render()
    {
        return view('livewire.pronostic-card');
    }
    public function mount()
    {
        $this->match = Match::find($this->pronostic->match_id);
        $this->country1 = Country::find($this->match->country1_id);
        $this->country2 = Country::find($this->match->country2_id);
    }
}
