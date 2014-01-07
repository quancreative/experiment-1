<?php


    // Directory structure
    define("DIR_S", '/');
    define('APP_ROOT', $_SERVER["REQUEST_URI"]);


	// Lesson 7 :: Routing system
	// perform regular expression match :: posts/2
	// (?P<id>) :: ?p<id>capture the id, \d :: capture only decimal, + :: capture one or more, $ :: must end in a decimal 
	// return :: Array ( [0] => posts/2 [id] => 2 [1] => 2 ) 
	//preg_match('/^posts\/(?P<id>\d+)$/', $url, $matches);
	//print_r($matches);
	//echo $url;
	
	// Database connection params


	// lib includes
//	include('application/lib/database.php');
//	include('application/lib/controller.php');
?>
