<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\User;

class PronosticoFinal extends Component
{
    public $user;
    public $countries;
    public $country1_id;
    public $country2_id;
    public $country3_id;
    public $country4_id;
    public $fecha_limite;

    protected $rules = [
        'country1_id' => ['required', 'different:country2_id', 'different:country3_id', 'different:country4_id'],
        'country2_id' => ['required', 'different:country3_id', 'different:country4_id'],
        'country3_id' => ['required', 'different:country4_id'],
        'country4_id' => ['required'],
    ];

    public function render()
    {
        return view('livewire.pronostico-final');
    }
    public function mount()
    {
        $this->fecha_limite= '2022-11-21';
        $this->country1_id = $this->user->country1_id;
        $this->country2_id = $this->user->country2_id;
        $this->country3_id = $this->user->country3_id;
        $this->country4_id = $this->user->country4_id;

        $this->countries = Country::all('id', 'name');
    }
    public function save()
    {
        $this->validate();

        //$user = User::find()
        $this->user->country1_id = $this->country1_id;
        $this->user->country2_id = $this->country2_id;
        $this->user->country3_id = $this->country3_id;
        $this->user->country4_id = $this->country4_id;
        $this->user->save();
    }
}
