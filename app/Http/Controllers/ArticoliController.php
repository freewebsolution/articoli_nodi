<?php

namespace App\Http\Controllers;

use App\Models\Articoli;
use App\Models\ArticoliRami;
use App\Models\Nodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $rami;

    public function __construct()
    {
        $this->rami = new Articoli();
    }
    public function index()
    {
       $categories= DB::table('articoli')
            ->Join('articoli_nodi','articoli.articoli_ID','=','articoli_nodi.articoli_ID')
            ->select('articoli.articoli_ID')
            ->get();
        $rami = new Articoli();
        foreach ($categories as $ramo) {
            $id = $ramo->articoli_ID;
            $rami->corrupt($id);
        }



        return view('articoli', compact('categories','rami', ['rami' => $this->rami->corrupt($id)]));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Articoli $articoli
     * @return \Illuminate\Http\Response
     */
    public function show(Articoli $articoli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Articoli $articoli
     * @return \Illuminate\Http\Response
     */
    public function edit(Articoli $articoli)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Articoli $articoli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articoli $articoli)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Articoli $articoli
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articoli $articoli)
    {
        //
    }
}
