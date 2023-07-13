<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinador extends Model
{
    use HasFactory;

    public function persona()
    {
        return $this->belongsTo(Persona::class,'id_persona','id');
    }

    public function contacto(){
        return $this->belongsTo(Contacto::class,'id_contacto','id');
    }

}
