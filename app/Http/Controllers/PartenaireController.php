<?php

namespace App\Http\Controllers;

use App\Partenaire;
use Illuminate\Http\Request;
use PhpParser\Builder\Param;
use Illuminate\Support\Facades\Storage;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('partenaire');
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
        $img=$request->file('img');
        $name='businessnam'.$img->getClientOriginalName();
        Partenaire::firstOrCreate(['email'=>$request->email,'businessnam'=>$request->nom_ent],['type'=>$request->type,'adresse_physique'=>$request->nom,'phone'=>$request->phone,'image'=>$name]);
    Storage::putFileAs(
    'public/img/',  $request->file('img'),$name
    );
return back();




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function show(Partenaire $partenaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Partenaire $partenaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partenaire $partenaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partenaire $partenaire)
    {
        //
    }
}
