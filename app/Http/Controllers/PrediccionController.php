<?php

namespace App\Http\Controllers;

use App\Models\Match;
use App\Models\Pronostic;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationData;
use Illuminate\Validation\ValidationException;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Auth;

class PrediccionController extends Controller
{
    public function index()
    {
        /*
        Se crean todos los registros de pronosticos para el usuario
        */

        //Obtengo todos los pronosticos para el usuario
        $pronostics = Pronostic::where('user_id', Auth::id())->get('match_id');

        //Obtengo todos los partidos disponibles
        $matches = Match::all('id');

        //Por cada partido verifico que exista el registro de pronostico
        foreach($matches as $match)
        {
            $no_existe_pronostico = false;

            foreach($pronostics as $pronostic)
            {
                $no_existe_pronostico = false;

                if ($match->id == $pronostic->match_id)
                {
                    $no_existe_pronostico = true;
                    break;
                }
            }

            if (!$no_existe_pronostico)
            {
                Pronostic::create([
                    'match_id' => $match->id,
                    'user_id'  => Auth::id(),
                ]);
            }
        }

        $pronostics = Pronostic::where('user_id', Auth::id())->get();

        return view('dash', compact('pronostics'));
    }

    public function store(Request $request)
    {
        if (Pronostic::all()->where('match_id', '=', $request->id)->where('user_id', '=', auth()->id())->count() > 0) {
            $id = $request->id;
            throw ValidationException::withMessages([
                "paisa$id" => "Ya has cargado este partido",
            ]);
        } else {
            $pronostico = new Pronostic();
            $id = $request->id;
            $pronostico->goals1 = $request->input("paisa$id");
            $pronostico->goals2 = $request->input("paisb$id");
            $pronostico->user_id = auth()->id();
            $pronostico->match_id = $request->id;
            $pronostico->save();
            throw ValidationException::withMessages([
                "paisa$id" => "Cargado Correctamente",
            ]);
        }
    }
}
