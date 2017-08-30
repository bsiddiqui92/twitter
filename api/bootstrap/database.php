<?php 

$capsule = new Illuminate\Database\Capsule\Manager; 

$capsule->addConnection([

	'driver' => 'mysql', 
	'host' => getenv('DB_HOST'), 
	'database' => getenv('DB_DATABASE'),
	'username' => getenv('DB_USERNAME'), 
	'password' => getenv('DB_PASSWORD'), 
	'charset' => 'utf8', 
	'collation' => 'utf8_unicode_ci',
	'prefix' => ''
]); 

$capsule->setAsGlobal(); 
$capsule->bootEloquent(); 