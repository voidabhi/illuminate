<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Illuminate\Database\Capsule\Manager as Capsule;  

$dbConfig = array(
	'driver'    => 'mysql',
	'host'      => 'localhost',
	'database'  => 'olivedb',
	'username'  => 'root',
	'password'  => '',
	'charset'   => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix'    => ''
);

$capsule = new Capsule; 
$capsule->addConnection($dbConfig);
$capsule->bootEloquent();


