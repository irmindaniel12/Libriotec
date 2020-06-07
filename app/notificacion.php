<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notificacion extends Model
{
    protected $table = 'notificacion';

    public function Publicacion()
    {
        return $this->hasMany('App\notificacion');
    }
	// Relación de Muchos a Uno
	public function user(){
		return $this->belongsTo('App\User', 'user_id');
	}
}
