<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    protected $table = 'citas';

    protected $fillable = ['id','asunto','fecha_inicio','fecha_fin','descripcion','id_paciente','id_doctor'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function doctor()
    {
        return $this->hasMany('App\Doctor');
    }

    public function paciente()
    {
        return $this->hasMany('App\Paciente');
    }
}
