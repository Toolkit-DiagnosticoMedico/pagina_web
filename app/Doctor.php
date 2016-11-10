<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctor';

    protected $fillable = ['id','nombre','apellidos','telefono','edad','direccion','cedula_profesional','especialidad','id_user'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function cita()
    {
        return $this->belongsTo('App\Citas');
    }
}
