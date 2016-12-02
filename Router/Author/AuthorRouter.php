<?php


use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app->get('/authors', function (Request $request, Response $response) {
	$authors = [
				1 => ['first_name' => 'God', 'last_name' => 'In Person', 'id' => 1],
				2 => ['first_name' => 'Charles', 'last_name' => 'Darwin', 'id' => 2],
				3 => ['first_name' => 'Adam', 'last_name' => 'Smith', 'id' => 3],
			 ];			
	return $response->withJson($authors);
});	
   

   
$app->get('/authors/{id}', function (Request $request, Response $response, $vars) {
	$authors = [
				1 => ['first_name' => 'God', 'title' => 'In Person', 'id' => 1],
				2 => ['first_name' => 'Charles', 'title' => 'Darwin', 'id' => 2],
				3 => ['first_name' => 'Adam', 'title' => 'Smith', 'id' => 3],
			 ];	
	$id = $vars['id'];
	return $response->withJson($authors[$id]);	
});	
   

