<?php 

use Symfony\Component\HttpFoundation\JsonResponse; 
use Symfony\Component\HttpFoundation\Request;
use \App\Models\Tweet as Tweet; 

$app->get('/tweet', 'tweet.controller:index');
$app->get('/tweet/{id}', 'tweet.controller:show'); 	
$app->get('/tweet/all', 'tweet.controller:showAll'); 


$app->post('/tweet', function (Request $request) use ($app) {
   
   	//get json payload
    $body = $request->getContent(); 
  	$body = json_decode($body); 

  	$post = array(
  		'user_id' => $body->user_id, 
  		'message' => $body->message
  	); 
  	
  	$app['tweet.controller']->insert($post);
  	return $app->json($post, 200);
});	

