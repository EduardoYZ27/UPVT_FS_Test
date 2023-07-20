<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectos_ofertados extends Model
{
    protected $table = 'proyectos_ofertados';

    protected $fillable = ['tipo_proyecto', 'perfil', 'duracion', 'estimulo', 'tipo_lug_part', 'coordinador', 'aprobacionDG', 'area', 'denominacion', 'justificacion', 'objetivos', 'actividades', 'alcances', 'evaluacion', 'convenioPDF', 'tipo_duracion','id_lugar_prestacion','estatus'];

    public function coordinadors()
{
    return $this->belongsTo(Coordinador::class, 'coordinadors', 'id')->with('persona');
}

public function persona()
{
    return $this->belongsTo(Persona::class, 'id_persona', 'id')->via('coordinadors');
}


    public function area()
    {
        return $this->belongsTo(Areas::class,'area','id');
    }
}
