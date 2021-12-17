<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArticoliRami extends Model
{
    protected $guarded = ['articoli_rami_ID'];
    protected $table = 'articoli_rami';

    public function nodi()
    {
        return $this->belongsTo(Nodi::class, 'nodi_ID');
    }

    public function counter(int $id): int
    {
        return DB::table("articoli_rami")
            ->distinct("articoli_id")
            ->where("nodi_id", "=", $id)
            ->count();
    }


    use HasFactory;
}
