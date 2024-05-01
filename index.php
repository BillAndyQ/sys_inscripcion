<?php
// require_once 'app/verif_voucher/Controller.php';
session_start();

require_once 'vendor/autoload.php';
require_once "./libs/controller.php";
require_once "./libs/model.php";

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\HttpFoundation\Request;


// Crear una colección de rutas
$routes = new RouteCollection();

// Definir una ruta básica
// $routes->add('hello', new Route('/hello/{name}', ['_controller' => function ($name) {
//     return 'Hello, '.$name;
// }]));
require_once './app/urls.php';


// Crear un contexto de solicitud
$request = Request::createFromGlobals();
$context = new RequestContext();
$context->fromRequest($request);

// Crear un matcher de URL con la colección de rutas y el contexto de la solicitud
$matcher = new UrlMatcher($routes, $context);

// Ejecutar el matcher para encontrar la ruta coincidente

try {
    $parameters = $matcher->match($request->getPathInfo());
    $controller = $parameters['_controller'];
    if(isset($parameters['name'])){
        echo $controller($parameters['name']);
    }else{
        echo $controller();
    }
} catch (Exception $e) {
    // Manejar excepciones si la ruta no se encuentra
    echo 'Ruta no encontrada';
}
