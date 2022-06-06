<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Http\Requests\StoreEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();

        return view('employee.index', compact('employee'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRequest $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->id = $request->legajo;
        $employee->dni = $request->dni;
        $employee->save();
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
        $employee = Employee::find($id);

        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\match  $match
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $employee = Employee::find($id);

        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatematchRequest  $request
     * @param  \App\Models\match  $match
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeRequest  $request, $id)
    {
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->id = $request->legajo;
        $employee->dni = $request->dni;
        $employee->save();

        return back()->with('success', 'Actualizado Correctamente');
    }
}
