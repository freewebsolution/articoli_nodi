<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Articoli extends Model
{
    protected $guarded = ['articoli_ID'];
    protected $table = 'articoli';

    public function articoliNodi(){
        return $this->hasMany(ArticoliNodi::class);
    }
    public function articoliRami(){
        return $this->hasMany(ArticoliNodi::class);
    }
    public function nodiId(int  $articoli_ID):Collection{
        return ArticoliNodi::distinct()->where('articoli_ID','=', $articoli_ID)->get('nodi_ID');
    }

    use HasFactory;
}
