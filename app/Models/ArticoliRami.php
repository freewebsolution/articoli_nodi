<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticoliRami extends Model
{
    protected $guarded = ['articoli_rami_ID'];

    public function articoli()
    {
        return $this->belongsToMany('App\Models\Articoli')->withTimestamps();
    }

    public function nodi()
    {
        return $this->belongsToMany('App\Models\Nodi')->withTimestamps();
    }

    use HasFactory;
}
