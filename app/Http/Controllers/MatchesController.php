<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use App\Models\Country;
use App\Models\User;
use App\Models\Employee;
use App\Models\Pronostic;
use App\Http\Requests\StoreMatchRequest;
use App\Http\Requests\UpdateMatchRequest;
use App\Models\Partido;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\PseudoTypes\False_;
use phpDocumentor\Reflection\PseudoTypes\True_;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PositionsController;

use function PHPUnit\Framework\isNull;

class MatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Matches::all();

        return view('matches.index', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();

        return view('matches.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorematchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMatchRequest $request)
    {
        $match = new Partido();
        $match->date = $request->date;
        $match->time = $request->time;
        $match->group = $request->group;
        $match->phase = $request->phase;
        $match->country1_id = $request->country1_id;
        $match->country2_id = $request->country2_id;
        $match->active_since = $request->active_since;
        $match->penalties_definition = isset($request->penalties_definition) ? 1 : 0;
        $match->save();
        return back()->with('success', 'Creado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\match  $match
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $match = Matches::find($id);
        $pronostics = Pronostic::join('users', 'users.id', '=', 'pronostics.user_id')->where("match_id", "=", $id)->get();

        return view('matches.show', compact('match', 'pronostics'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\match  $match
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countries = Country::all();
        $match = Matches::find($id);

        return view('matches.edit', compact('match', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatematchRequest  $request
     * @param  \App\Models\match  $match
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatematchRequest  $request, $id)
    {
        $match = Matches::find($id);
        $match->date = $request->date;
        $match->time = $request->time;
        $match->group = $request->group;
        $match->phase = $request->phase;
        $match->country1_id = $request->country1_id;
        $match->goals1 = $request->goals1;
        $match->country2_id = $request->country2_id;
        $match->goals2 = $request->goals2;
        $match->active_since = $request->active_since;
        $match->is_over = isset($request->is_over) ? 1 : 0;
        $match->penalties_definition = isset($request->penalties_definition) ? 1 : 0;
        $match->penalties1 = $request->penalties1;
        $match->penalties2 = $request->penalties2;

        /**
         * Si el partido se define por penales, guardo el pais ganador
         */
        if ($match->penalties_definition)
        {
            $match->penalties_winner = ($match->penalties1 > $match->penalties2)
                                     ?
                                     $match->country1_id
                                     :
                                     $match->country2_id;
        }

        $match->save();

        /**
         * Si el partido tiene el tilde de finalizado, llamo a la funcion
         * que calcula el puntaje para cada pronostico de dicho partido
         */
        if ($match->is_over) $this->calcularPuntajes($match);

        /* Le pone posicion a los jugadores que realizaron un pronostico*/
        $contador = 1;

        $posts = User::join('pronostics', 'users.id', '=', 'pronostics.user_id')
            ->select('users.id', 'users.name', 'users.position', DB::raw('SUM(pronostics.puntos) as puntos'), DB::raw('SUM(pronostics.aciertos) as aciertos'))
            ->groupBy('users.id', 'users.name', 'users.position')
            ->orderBy('puntos', 'desc')
            ->orderBy('aciertos', 'desc')
            ->orderBy('position', 'desc')
            ->get();

        foreach ($posts as $item) {
            $item->position = $contador;
            $contador++;
            $item->save();
        }

        return back()->with('success', 'Actualizado Correctamente');
    }

    /**
     * Funci??n que recibe un partido finalizado y calcula el puntaje
     * para cada pronostico del partido
     */
    private function calcularPuntajes(Matches $m)
    {
        //Cargo todos los pronostico del partido
        $pronostics = Pronostic::where('match_id', $m->id)->get();

        //Recorro todos los pronosticos
        foreach ($pronostics as $p) {
            $p->puntos = 0;
            $p->aciertos = false;

            //Gan?? el equipo A
            if ($m->goals1 > $m->goals2 && $p->goals1 > $p->goals2) $p->puntos += 5;
            //Gan?? el equipo B
            if ($m->goals1 < $m->goals2 && $p->goals1 < $p->goals2) $p->puntos += 5;
            //Empate
            if ($m->goals1 == $m->goals2 && $p->goals1 == $p->goals2 && !is_null($p->goals1) && !is_null($p->goals2)) $p->puntos += 5;
            //Puntos extras por acertar un marcador
            if ($m->goals1 == $p->goals1 || $m->goals2 == $p->goals2) $p->puntos += 2;
            //Puntos extas por acertar marcador exacto
            if ($m->goals1 == $p->goals1 && $m->goals2 == $p->goals2) {
                $p->puntos += 5;
                $p->aciertos = true;
            }
            //Puntos por definicion por penales
            if ($m->penalties_definition && $m->goals1 == $m->goals2) {
                if ($m->penalties_winner == $p->penalties_winner) $p->puntos += 5;
            }

            $p->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\match  $match
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $match = Matches::find($id);
        $match->delete();
        return  redirect()->route('matches.index');
    }
}
