<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Articoli extends Model
{
    protected $guarded = ['articoli_ID'];
    protected $table = 'articoli';

    public static function corrupt(?int $articoli_id): ?object
    {
        return DB::table('articoli')
            ->Join('articoli_rami', 'articoli.articoli_ID', '=', 'articoli_rami.articoli_ID')
            ->where('articoli.articoli_ID', '<>', $articoli_id)
            ->select('articoli.articoli_ID')
            ->get();

    }

    use HasFactory;
}
