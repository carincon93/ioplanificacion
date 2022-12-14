<?php

namespace App\Http\Controllers;

use App\Models\Quantum;
use Illuminate\Http\Request;

class QuantumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quantum = Quantum::find(1);

        $quantum->q = $request->quantum;
        $quantum->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quantum  $quantum
     * @return \Illuminate\Http\Response
     */
    public function show(Quantum $quantum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quantum  $quantum
     * @return \Illuminate\Http\Response
     */
    public function edit(Quantum $quantum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quantum  $quantum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quantum $quantum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quantum  $quantum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quantum $quantum)
    {
        //
    }
}
