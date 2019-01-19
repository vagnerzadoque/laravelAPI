<?php

namespace App\Http\Controllers;

use App\Amigo;
use Illuminate\Http\Request;

class AmigoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Amigo::all();
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
        return Amigo::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Amigo  $amigo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Amigo::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Amigo  $amigo
     * @return \Illuminate\Http\Response
     */
    public function edit(Amigo $amigo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Amigo  $amigo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $amigos = Amigo::findOrFail($id);
        $amigos->update($request->all());

        return $amigos;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Amigo  $amigo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $amigos = Amigo::findOrFail($id);
        $amigos->delete();

        return 204;
    }
}
