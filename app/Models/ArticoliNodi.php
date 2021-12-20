<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArticoliNodi extends Model
{
    protected $guarded = ['articoli_nodi_ID'];
    protected $table = 'articoli_nodi';

    public function articoli(){
        return $this->belongsTo(ArticoliNodi::class,'articoli_ID');
    }
    use HasFactory;
}
