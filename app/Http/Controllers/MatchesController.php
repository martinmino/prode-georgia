<?php

namespace App\Http\Controllers;

use App\Models\Match;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMatchRequest;
use App\Http\Requests\UpdateMatchRequest;

class MatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Match::all();

        return view('matches.index', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all('id', 'name');

        return view('matches.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMatchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMatchRequest $request)
    {

        $match::create($request->all());

        return redirect()->route('matches.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\match  $match
     * @return \Illuminate\Http\Response
     */
    public function show(Match $match)
    {
        return view('matches.show', compact('match'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\match  $match
     * @return \Illuminate\Http\Response
     */
    public function edit(Match $match)
    {
        $countries = Country::all('id', 'name');

        return view('matches.edit', compact('match', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatematchRequest  $request
     * @param  \App\Models\match  $match
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMatchRequest $request, Match $match)
    {
        $match->date = $request->date;
        $match->time = $request->time;
        $match->group = $request->group;
        $match->phase = $request->phase;
        $match->country1_id = $request->country1_id;
        $match->goals1 = $request->goals1;
        $match->country2_id = $request->country2_id;
        $match->goals2 = $request->goals2;
        $match->active_since = $request->active_since;
        $match->is_over = $request->has('is_over');
        $match->save();

        return redirect()->route('matches.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\match  $match
     * @return \Illuminate\Http\Response
     */
    public function destroy(Match $match)
    {
        //
    }
}
