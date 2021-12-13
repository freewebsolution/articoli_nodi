<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articoli extends Model
{
    protected $guarded = ['articoli_ID'];
    protected $table = 'articoli';

    use HasFactory;
}
