<?php

function validVoucher($voucher){
    $numVoucher = $_POST['voucher'];
    $valid = $voucher->verif("num_voucher=" . $numVoucher);
    if($valid){
        $_SESSION['login'] = true;
        return true;
    }else{
        return false;
    }
}