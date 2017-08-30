<?php 

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = new \Dotenv\Dotenv(__DIR__ . '/../'); 
$dotenv->load(); 	
require_once __DIR__ . '/database.php'; 

use \App\Controllers\TweetController as TweetController; 


$app = new Silex\Application([
	'debug' => true
]);

$app->after(new App\Middleware\Cors());  

$app->register(new \Silex\Provider\ServiceControllerServiceProvider); 

$app['fractal'] = function () {
	return new \League\Fractal\Manager(); 
}; 

$app['tweet.controller'] = function ($app) {
	return new TweetController($app['fractal']); 
}; 


require_once __DIR__ . '/../routes/api.php'; 
