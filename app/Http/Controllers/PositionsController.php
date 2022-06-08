<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PositionsController extends Controller
{

    public function index()
    {
        $table = DB::table('pronostics')
                   ->join('users', 'users.id', '=', 'pronostics.user_id')
                   ->select('users.id', 'users.name', DB::raw('SUM(pronostics.puntos) as puntos'), DB::raw('SUM(pronostics.aciertos) as aciertos'))
                   ->groupBy('users.id', 'users.name')
                   ->orderBy('puntos', 'desc')
                   ->orderBy('aciertos', 'desc')
                   ->get();

        return view('positions', compact('table'));
    }

}
