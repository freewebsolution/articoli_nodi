<?php

namespace App\Http\Controllers;

use App\Models\Nodi;


class NodiController extends Controller
{
    public function index()
    {
       $categories= Nodi::where(function ($query) {
            $query->where('nodi_ID_padre',0);
        })
            ->with('childrenCategories')
            ->get();

        return view('category', compact('categories'));
    }

}
