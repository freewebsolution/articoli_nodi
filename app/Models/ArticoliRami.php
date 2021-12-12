<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticoliRami extends Model
{
    protected $guarded = ['articoli_rami_ID'];
    protected $table = 'articoli_rami';

    public function nodi()
    {
        return $this->belongsTo(Nodi::class);
    }
    use HasFactory;
}
