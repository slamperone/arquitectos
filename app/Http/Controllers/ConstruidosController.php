<?php

namespace App\Http\Controllers;

use App\Construidos;
use Illuminate\Http\Request;

class ConstruidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listado completa de contruidos
        $cons = Construidos::all();
        return view('construidos',compact('cons'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Construidos  $construidos
     * @return \Illuminate\Http\Response
     */
    public function show($construidos)
    {
        //
        $prop = Construidos::where('slug', '=', $construidos)->first();
        return view('detalleConstruidos',compact('prop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Construidos  $construidos
     * @return \Illuminate\Http\Response
     */
    public function edit(Construidos $construidos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Construidos  $construidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Construidos $construidos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Construidos  $construidos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Construidos $construidos)
    {
        //
    }
}
