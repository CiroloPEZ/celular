<?php
require_once 'venta.class.php';
$consulta = new stdClass();
$mar=new venta();
$consulta=$mar->bxpnombre($_GET['id_celular']);
$json= json_encode($consulta); 
echo $json;
?>