<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $primaryKey ='id_categoria';


    public function produto(){
        return $this->hasMany(Produto::class, 'id_categoria', 'id');
    }
    
    }