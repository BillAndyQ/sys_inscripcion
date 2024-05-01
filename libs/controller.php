<?php
use Symfony\Component\HttpFoundation\RedirectResponse;

abstract class Controller {
    protected function get(){
        echo "solicitud GET no autorizada";
        exit();
    }
    protected function post(){
        echo "solicitud POST no autorizada";
        exit();
    }
    protected function verifLogin(){
        
        if(isset($_SESSION['login'])){
            if($_SESSION['login'] == true){
            }
            else{
                exit();
            }
        }else{
            $response = new RedirectResponse('/inscripcion');
            $response->send();
            exit();
        }
    }
    function __construct()
    {
        $this->verifLogin();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->get();
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->post();
        } elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
            echo "Estás realizando una solicitud PUT";
        } elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            echo "Estás realizando una solicitud DELETE";
        }
    }

}
