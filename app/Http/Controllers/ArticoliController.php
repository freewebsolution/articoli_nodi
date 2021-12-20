<?php

namespace App\Http\Controllers;

use App\Models\Articoli;
use App\Models\ArticoliNodi;
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
    public $nodi;

    public function __construct()
    {
        $this->nodi = new Articoli();
    }
    public function index()
    {
        $articoli = Articoli::distinct()->get(['articoli_ID']);
        foreach($articoli as $art){
            $nodi_Id = $art->articoli_ID;
        }
        $articoli = new Articoli();
        $articoli->nodiId($nodi_Id);

        return view('articoli', compact('articoli',['articoli'=>$this->nodi->nodiId($nodi_Id)]));
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
