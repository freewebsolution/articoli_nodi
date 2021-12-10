<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nodi extends Model
{
    protected $table = 'nodi';
    protected $guarded = ['nodi_ID'];


    use HasFactory;
}
