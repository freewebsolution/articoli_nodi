<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nodi extends Model
{
    use HasFactory;
    protected $table = 'nodi';
    protected $guarded = ['nodi_ID'];

    public function childs()
    {
        return $this->hasMany(Nodi::class,'nodi_ID_padre','nodi_ID');
    }







}
