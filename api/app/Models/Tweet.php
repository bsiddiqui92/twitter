<?php 

namespace App\Models; 

use Illuminate\Database\Eloquent\Model; 

class Tweet extends Model
{

	protected $table = 'tweet';
	public $primaryKey = 'tweet_id';

	public function user()
	{
		return $this->belongsTo('App\Models\User', 'tweet_id'); 
	}

}