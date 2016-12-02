<?php


use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app->get('/books', function (Request $request, Response $response) {
	$books = [
				1 => ['author' => 'God In Person', 'title' => 'The Holy Bible', 'id' => 1],
				2 => ['author' => 'Charles Darwin', 'title' => 'The Origin of Species', 'id' => 2],
				3 => ['author' => 'Adam Smith', 'title' => 'The Wealth of Nations', 'id' => 3],
			 ];			
	return $response->withJson($books);
});	
   

   
$app->get('/books/{id}', function (Request $request, Response $response, $vars) {
	$books = [
				1 => ['author' => 'God In Person', 'title' => 'The Holy Bible', 'id' => 1],
				2 => ['author' => 'Charles Darwin', 'title' => 'The Origin of Species', 'id' => 2],
				3 => ['author' => 'Adam Smith', 'title' => 'The Wealth of Nations', 'id' => 3],
			 ];	
	$id = $vars['id'];
	return $response->withJson($books[$id]);	
});	
   

