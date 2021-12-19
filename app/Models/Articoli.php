<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Articoli extends Model
{
    protected $guarded = ['articoli_ID'];
    protected $table = 'articoli';


    use HasFactory;
}
