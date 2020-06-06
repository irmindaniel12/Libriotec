<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table = 'Publicaciones';
	
	// Relación de Muchos a Uno
	public function user(){
		return $this->belongsTo('App\User', 'user_id');
	}
	
}