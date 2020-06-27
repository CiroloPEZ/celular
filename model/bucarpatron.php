<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    require_once 'venta.class.php';
    $mar=new maravilla();
    $maravilla=$mar->bxpnombre($_GET['id_celular']);
    $json=json.encode($id_celular);
    echo $json;
?>
