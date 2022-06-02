<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\User;
use Attribute;
use Carbon\Carbon;

class PronosticoFinal extends Component
{
    public $user;
    public $countries;
    public $country1_id;
    public $country2_id;
    public $country3_id;
    public $country4_id;
    public $fecha_limite;
    public $hoy;



    protected $rules = [
        'country1_id' => ['required', 'different:country2_id', 'different:country3_id', 'different:country4_id'],
        'country2_id' => ['required', 'different:country3_id', 'different:country4_id'],
        'country3_id' => ['required', 'different:country4_id'],
        'country4_id' => ['required'],
    ];

    public function messages()
    {
        return [
            'country1_id.required' => 'El  :attribute esta vacio',
            'country2_id.required' => 'El  :attribute  esta vacio',
            'country3_id.required' => 'El  :attribute esta vacio',
            'country4_id.required' => 'El  :attribute esta vacio',
            'country1_id.different' => 'El :attribute debe ser diferente al :other',
            'country4_id.different' => 'El :attribute  debe ser diferente al :other',
            'country2_id.different' => 'El :attribute  debe ser diferente al :other',
            'country3_id.different' => 'El :attribute  debe ser diferente al :other',
        ];
    }
    public function render()
    {
        return view('livewire.pronostico-final');
    }
    public function mount()
    {
        // $this->fecha_limite = '2022-11-21';
        $this->fecha_limite = Carbon::create(2022, 11, 21)->format('Y-m-d');
        $this->country1_id = $this->user->country1_id;
        $this->country2_id = $this->user->country2_id;
        $this->country3_id = $this->user->country3_id;
        $this->country4_id = $this->user->country4_id;

        $this->hoy = Carbon::today()->format('Y-m-d');

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

        return back()->with('success', 'Datos cargados correctamente');
    }
}
