<?php
use Symfony\Component\Routing\Route;

$routes->add('inicio', new Route('/inscripcion', ['_controller' => function () {
    require_once "./app/verif_voucher/controller.php";
}]));

$routes->add('ficha_inscripcion', new Route('/ficha-inscripcion', ['_controller' => function () {
    require_once "./app/ficha_inscripcion/controller.php";
}]));