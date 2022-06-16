<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pronostic;
use App\Models\User;
use App\Models\Partido;
use App\Models\Country;
use Illuminate\Support\Facades\DB;

class PositionsSearch extends Component
{
    public $search;
    public $user;

    public function render()
    {
        $posts = User::join('pronostics', 'users.id', '=', 'pronostics.user_id')
            ->select('users.id', 'users.name', 'users.position', DB::raw('SUM(pronostics.puntos) as puntos'), DB::raw('SUM(pronostics.aciertos) as aciertos'))->where('name', 'like', '%' . $this->search . '%')
            ->groupBy('users.id', 'users.name', 'users.position')
            ->orderBy('puntos', 'desc')
            ->orderBy('aciertos', 'desc')
            ->orderBy('position', 'asc')
            ->get();

        $posts2 = User::join('pronostics', 'users.id', '=', 'pronostics.user_id')
            ->select('users.id', 'users.name', 'users.position', DB::raw('SUM(pronostics.puntos) as puntos'), DB::raw('SUM(pronostics.aciertos) as aciertos'))->where('users.id', '=', $this->user->id)
            ->groupBy('users.id', 'users.name', 'users.position')
            ->get();

        return view('livewire.positions-search', compact('posts', 'posts2'));
    }
}
