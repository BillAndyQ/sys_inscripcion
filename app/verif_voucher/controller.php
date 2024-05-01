<?php
require './app/verif_voucher/models.php';
require "./app/verif_voucher/validators/valid_voucher.php";
use Symfony\Component\HttpFoundation\RedirectResponse;

class verifVoucher extends Controller
{
    public function verifLogin(){}
    public function get()
    {
        require_once "./app/verif_voucher/template/index.php";
    }
    public function post()
    {   
        $voucher = new Voucher();
        loadModel($voucher);
        
        $valid = validVoucher($voucher);
        if($valid){
            $response = new RedirectResponse('/ficha-inscripcion');
            $response->send();
        }else{
            require_once "./app/verif_voucher/template/index.php";
        }
    }
}

$controller = new verifVoucher();