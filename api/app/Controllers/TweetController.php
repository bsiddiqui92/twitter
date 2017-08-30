<?php 

namespace App\Controllers;
use App\Models\Tweet;
use App\Models\User; 
use Symfony\Component\HttpFoundation\JsonResponse; 
use App\Transformers\TweetTransformer; 

use League\Fractal\{
	Manager as Fractal, 
	Resource\Item, 
	Resource\Collection
}; 


class TweetController
{
	protected $fractal; 
	public function __construct($fractal)
	{
		$this->fractal = $fractal; 
	}

	/** 
	 * @method index 
	 *
	 * Show all tweets
	 * 
	 * @return json
	 */

	public function index()
	{
		$tweet = Tweet::get(); 

		$transformer = new Collection($tweet, new TweetTransformer); 
		return new JsonResponse($this->fractal->createData($transformer)->toArray()); 
	}

	/** 
	 * @method show 
	 *
	 * Show all tweets for given user
	 * @param $id of user
	 * @return mixed
	 */

	public function show($id) 
	{
		$tweet = User::find($id)->tweet; 

		$transformer = new Collection($tweet, new TweetTransformer); 
		return new JsonResponse($this->fractal->createData($transformer)->toArray()); 
	}

	/** 
	 * @method insert 
	 *
	 * Insert tweet data into tweet able
	 * @param $data array 
	 * @return mixed
	 */


	public function insert($data)
	{
		$tweet = new Tweet; 

		$tweet->user_id = $data['user_id']; 
		$tweet->message = $data['message'];

		$result = $tweet->save(); 
		return $result; 


	}

 }