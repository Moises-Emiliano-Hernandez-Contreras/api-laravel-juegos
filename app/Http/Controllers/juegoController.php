<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Juego;

class juegoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $juegos=Juego::all();
        return $juegos;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $juego=new Juego();
        $juego->nombre=$request->nombre;
        $juego->precio=$request->precio;
        $juego->año=$request->año;
        $juego->save();
        return $juego;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $juego=Juego::findOrFail($request->id);
        $juego->nombre=$request->nombre;
        $juego->precio=$request->precio;
        $juego->año=$request->año;
        $juego->save();
        return $juego;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        $juego = Juego::destroy($request->id);
        return $juego;
    }
}
