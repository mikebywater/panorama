<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write("This will list all states");
    return $response;
});


$app->get('/states/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write(file_get_contents('body.txt'));
    return $response->withHeader('Content-type', 'application/json');
});

$app->post('/states/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    file_put_contents('body.txt' , file_get_contents('php://input'));
    $response->getBody()->write(file_get_contents('body.txt'));
    return $response;
});

$app->run();
