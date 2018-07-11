<?php

require 'vendor/autoload.php';

$app = new \Slim\App();

$app->get('/', function($request, $response, $args){
	echo 
	"<html>
		<p>This is only a test.</p>
	</html>";
});

$app->run();
?>