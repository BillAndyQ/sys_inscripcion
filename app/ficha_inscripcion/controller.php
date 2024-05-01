<?php
require './app/verif_voucher/models.php';
require "./app/verif_voucher/validators/valid_voucher.php";
use Symfony\Component\HttpFoundation\RedirectResponse;

class FichaInscripcion extends Controller
{
    public function get()
    {
        require_once "./app/ficha_inscripcion/template/index.php";
    }
    public function post()
    {   
        require_once "./app/ficha_inscripcion/template/index.php";
    }
}

$controller = new FichaInscripcion();