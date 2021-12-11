<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticoliNodi extends Model
{
    protected $guarded = ['articoli_nodi_ID'];
    protected $table = 'articoli_nodi';
    use HasFactory;
}
