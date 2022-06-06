<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use App\Models\Country;
use App\Http\Requests\StoreMatchRequest;
use App\Http\Requests\UpdateMatchRequest;
use Illuminate\Http\Request;

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
        $match = new Matches();
        $match->date = $request->date;
        $match->time = $request->time;
        $match->group = $request->group;
        $match->phase = $request->phase;
        $match->country1_id = $request->country1_id;
        $match->country2_id = $request->country2_id;
        $match->active_since = $request->active_since;
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

        return view('matches.show', compact('match'));
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
    public function update(Request $request, $id)
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
        $match->save();

        return back()->with('success', 'Actualizado Correctamente');
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
