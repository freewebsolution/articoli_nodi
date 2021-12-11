<?php

namespace App\Http\Controllers;

use App\Models\Nodi;


class NodiController extends Controller
{
    public function index()
    {
        $categories = Nodi::whereNull('nodi_ID_padre')
            ->with('childrenCategories')
            ->get();
        return view('articoli', compact('categories'));
    }


}
