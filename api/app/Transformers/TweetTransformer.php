<?php 

namespace App\Transformers; 

use App\Models\Tweet; 
use League\Fractal\TransformerAbstract; 

class TweetTransformer extends TransformerAbstract
{
	/** 
	 * @method transofrm
	 *
	 * Define response structure for tweet data
	 * @param Tweet object
	 * @return json
	 */

	public function transform(Tweet $tweet)
	{
		return [
			'id' => $tweet->tweet_id, 
			'user' => $tweet->user_id,
			'tweet' => $tweet->message, 
			'created_at' => $tweet->created_at->toDateTimeString(), 
			'created_at_human' => $tweet->created_at->diffForHumans()
		]; 
	}
}