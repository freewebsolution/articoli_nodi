<?php

namespace App\Http\Controllers;

use App\Models\ArticoliRami;
use App\Models\Nodi;
use Illuminate\Support\Facades\DB;


class NodiController extends Controller
{
    public $rami;

    public function __construct()
    {
        $this->rami = new ArticoliRami();
    }

    public function index()
    {
        $categories = Nodi::with('childs')
            ->where('nodi_ID_padre', '=', 0)
            ->where('nodi_ID', '!=', 0)
            ->get();
        $rami = DB::table('articoli_rami')
            ->distinct('nodi_ID')
            ->get();
        foreach ($rami as $ramo) {
            $id = $ramo->nodi_ID;
        }
        $rami = new ArticoliRami();
        $rami->counter($id);

        return view('category', compact('categories', 'id','rami', ['rami' => $this->rami->counter($id)]));
    }


}
