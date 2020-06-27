º<?php
require_once'../model/venta.class.php';
require_once'../model/cliente.class.php';
require_once'../model/vendedor.class.php';
require_once'../model/celular.class.php';

if(!empty($_POST['viewventa']))
{
    switch ($_POST['accion'])
    {
        case 'editarventa':
            $venta["num_venta"]=$_POST['num_venta'];
            $venta["id_celular"]=$_POST['id_celular'];
            $venta["id_vendedor"]=$_POST['id_vendedor'];
            $venta["fecha"]=$_POST['fecha'];
            $venta["total"]=$_POST['total'];
            $venta["id cliente"]=$_POST['id_cliente'];
           /* $celular["imagen"]=$_POST['imagen'];*/
           if($_FILES['imagen']['error']>0)
            {
                $venta["imagen"]=$_POST['imagenanterior'];
                               
            }
            else{
                unlink($_POST['imagenanterior']);
                move_uploaded_file($_FILES['imagen']['tmp_name'],"../content/images/fotos/".$_FILES['imagen']['name']);
                echo "<em id='__mceDel'> </em>";
                $venta["imagen"]="../content/images/fotos/".$_FILES['imagen']['name'];
               }
           require_once ('../model/venta.class.php');
            $on=new venta();
            if($on->updateventa($venta)){
                $msg="los datos se actualizaron correctamente";
                require ("../views/editarventa.php");
                
            }else{
                $msg="los datos no se actualizaron correctamente"; 
              require ("../views/editarventa.php");
                 
            }
            break;
            case 'addventa':
                          $newventa['id_celular']=$_POST['id_celular'];
                          $newventa['id_vendedor']=$_POST['id_vendedor'];
                          $newventa['fecha']=$_POST['fecha'];
                          $newventa['total']=$_POST['total'];
                          $newventa['id_cliente']=$_POST['id_cliente'];
                          $newventa['num_venta']=$_POST['num_venta'];
                          
                          if($_FILES['imagen']['error']>0)
                          {
                              $newventa["imagen"]="../content/images/nofoto.jpg";
                          } 
                          else{
                              /*A qui se mueve la imagen de la pc al sitio*/
                              move_uploaded_file($_FILES['imagen']['tmp_name'],"../content/images/fotos/".$_FILES['imagen']['name']);
                              echo "<em id='__mceDel'></em>";
                              /*Se guardad en arreglo en su indice foto el nombre imagen  y su ruta en el sitio*/
                              $newventa['imagen']="../content/images/fotos/".$_FILES['imagen']['name'];
                              
                          }
                         
                     $op=new venta();
                     $op->addventa($newventa);
                     $datos=$op->viewventa();
                          require'../views/venta/viewsventa.php';
            break;
        
    }
}
else{
    if(!empty($_GET['vistaventa']))
    {
        switch ($_GET['accion'])
        {
            case'viewventa':
                          $celu=new vendedor();
                          $cel=$celu->viewvendedor();
                          $cliente=new cliente();
                          $cli=$cliente->viewcliente();
                          $celular=new celular();
                          $celu=$celular->viewcelular();
                          
                          $celular=new venta();
                          $nombres=$celular->viewventa();
                           unset($celular);
                          
                              require'../views/venta/newventa.php';
                             break;
                         
            case'eliminarventa':
                  $venta=new venta();
                  $cer=$venta->buscarventa($_GET['num_venta']);
                  if($cer['imagen']!="../content/images/fotos/noFoto.jpg");
                   {
                      unlink($cer['imagen']);
                  }
                  unset($venta);
                  $venta=new venta();
                  $venta->deleteventa($_GET['num_venta']);
                  $datos=$venta->viewventa();
                  require'../views/venta/viewsventa.php';
                             break;
            case 'editarventa':
                          $vent=new venta();
                          $venta=$vent->buscarventa($_GET['num_venta']);
                          require ("../views/venta/editarventa.php");
                          break;
            case 'listaventas':
                  $venta=new venta();
                  $datos=$venta->viewventa(); 
                  require("../views/venta/viewsventa.php");
               break;
        }
    }
}
?>
