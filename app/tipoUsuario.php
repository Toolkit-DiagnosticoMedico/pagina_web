<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoUsuario extends Model
{
    protected $table = 'tipo_usuario';

    protected $fillable = ['rol'];

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
