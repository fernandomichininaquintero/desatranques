<?php
session_start();

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

// Autocargador para los componentes instalados desde composer (en este caso Slim)
require __DIR__ . '/vendor/autoload.php'; 


// definimos constantes que facilitan el trabajo
require __DIR__.'/ctes.php';
define('BASE_URL', 'http://localhost:8000/index.php/');

include (HELPERS_PATH.'vistas.php');
include (CTRL_PATH.'tareas.php');


$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$app = new \Slim\App($configuration);

// $app->get('/', function (Request $request, Response $response, $args) {
//     $response->getBody()->write( Tareas::getInstance()->Login() );
//     return $response;
// });

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write( Tareas::getInstance()->EsAdmin() );
    return $response;
});

// $app->get('/ver', function (Request $request, Response $response, $args) {
//     $response->getBody()->write( Tareas::getInstance()->Ver() );
//     return $response;
// });

$app->post('/add', function (Request $request, Response $response, $args) {
    $response->getBody()->write( Tareas::getInstance()->Add() );
    return $response;
});

// $app->any('/modificar', function (Request $request, Response $response, $args) {
//     $response->getBody()->write( Tareas::getInstance()->Modificar() );
//     return $response;
// });

// $app->get('/borrar', function (Request $request, Response $response, $args) {
//     $response->getBody()->write( Tareas::getInstance()->Borrar() );
//     return $response;
// });

// $app->get('/completar', function (Request $request, Response $response, $args) {
//     $response->getBody()->write( Tareas::getInstance()->Completar() );
//     return $response;
// });

// $app->get('/buscar', function (Request $request, Response $response, $args) {
//     $response->getBody()->write( Tareas::getInstance()->Buscar() );
//     return $response;
// });

$app->run();