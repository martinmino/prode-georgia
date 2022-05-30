<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use App\Models\Pronostic;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationData;
use Illuminate\Validation\ValidationException;
use Symfony\Contracts\Service\Attribute\Required;

class PrediccionController extends Controller
{
    public function index()
    {
        $partidos    = Partido::all('id');
        $pronostics = Pronostic::where('user_id', auth()->id())->get();

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
                    'match_id' => $match->id,
                ]);
            }
        }

        $pronostics = Pronostic::all();

        return view('dashboard', compact('pronostics'));
    }

    public function store(Request $request)
    {
        if (Pronostic::all()->where('match_id', '=', $request->id)->where('user_id', '=', auth()->id())->count() > 0) {
            $id = $request->id;
            throw ValidationException::withMessages([
                "paisa$id" => "Ya has cargado este partido!",
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
                "paisb$id" => "Cargado Correctamente!",
            ]);
        }
    }
}
