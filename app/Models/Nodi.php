<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nodi extends Model
{
    use HasFactory;
    protected $table = 'nodi';
    protected $guarded = ['nodi_ID'];


    public function categories(){
        return $this->hasMany(Nodi::class);
    }

    public function childrenCategories(){
        return $this->hasMany(Nodi::class)->with('nodi');
    }

}
