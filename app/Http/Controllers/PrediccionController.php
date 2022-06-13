<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use App\Models\Pronostic;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationData;
use Illuminate\Validation\ValidationException;
use Symfony\Contracts\Service\Attribute\Required;
use Carbon\Carbon;

class PrediccionController extends Controller
{


    public function index()
    {
        $partidos    = Partido::all('id', 'penalties_definition');
        $pronostics = Pronostic::all()->where('user_id', auth()->id());

        foreach ($partidos as $partido) {

            $existe = false;

            foreach ($pronostics as $pronostic) {
                if ($partido->id == $pronostic->match_id) {
                    $existe = true;
                    break;
                }
            }

            if (!$existe) {
                Pronostic::create([
                    'user_id' => auth()->id(),
                    'match_id' => $partido->id,
                    'penalties_definition' => $partido->penalties_definition,
                ]);
            }
        }

        $pronostics = Pronostic::all()->where('user_id', auth()->id());
        return view('dashboard', compact('pronostics'));
    }
}
