<?php

use Panorama\Repositories\State\StateRepository;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);

$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write("This will list all states");
    return $response;
});


$app->get('/states/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $repo = new StateRepository();
    $data = $repo->find($name);
    $response->getBody()->write(json_encode($data));
    return $response->withHeader('Content-type', 'application/json');
});

$app->post('/states/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $data = json_decode(file_get_contents('php://input'));
    $repo = new StateRepository();
    $repo->update($name,$data);

    $response->getBody()->write('Done');
    return $response;
});

$app->run();
