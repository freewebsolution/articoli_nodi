<?php

namespace App\Http\Controllers;

use App\Models\Nodi;


class NodiController extends Controller
{
    public function index()
    {
        $categories = Nodi::withCount('childs')
            ->where('nodi_ID_padre', '=', 0)
            ->where('nodi_ID', '!=', 0)
            ->get();
        return view('category', compact('categories'));
    }

    public function articoli(){
        $categories = Nodi::withCount('rami','nodi')
            ->where('nodi_ID','!=',0)
            ->get();
        return view('articoli', compact('categories'));
//        dd($categories);
    }

}
