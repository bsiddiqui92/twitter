<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Model; 

class User extends Model
{
	protected $table = 'user';
	public $primaryKey = 'user_id';

	public function tweet()
	{
		return $this->hasMany('App\Models\Tweet', 'user_id'); 
	}

}