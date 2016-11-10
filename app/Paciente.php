<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'paciente';

    protected $fillable = ['id','nombre','apellidos','telefono','edad','direccion','curp','id_user'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function cita()
    {
        return $this->belongsTo('App\Citas');
    }
}
