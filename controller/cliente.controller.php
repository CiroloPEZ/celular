<?php
require_once'../model/cliente.class.php';
if(!empty($_POST['viewcliente']))
{
    switch ($_POST['accion'])
    {
        case 'editarcliente':
            $celular["id_cliente"]=$_POST['id_cliente'];
            $celular["nom_cliente"]=$_POST['nom_cliente'];
            $celular["credito"]=$_POST['credito'];
           
           /* $celular["imagen"]=$_POST['imagen'];*/
           if($_FILES['imagen']['error']>0)
            {
                $cliente["imagen"]=$_POST['imagenanterior'];
                               
            }
            else{
                unlink($_POST['imagenanterior']);
                move_uploaded_file($_FILES['imagen']['tmp_name'],"../content/images/fotos/".$_FILES['imagen']['name']);
                echo "<em id='__mceDel'> </em>";
                $celular["imagen"]="../content/images/fotos/".$_FILES['imagen']['name'];
               }
           require_once ('../model/cliente.class.php');
            $on=new cliente();
            if($on->updatecliente($cliente)){
                $msg="los datos se actualizaron correctamente";
                require ("../views/cliente/editarcliente.php");
                
            }else{
                $msg="los datos no se actualizaron correctamente"; 
              require ("../views/cliente/editarcliente.php");
                 
            }
            break;
            case 'addcliente':
                          $newcliente['id_cliente']=$_POST['id_cliente'];
                          $newcliente['nom_cliente']=$_POST['nom_cliente'];
                          $newcliente['credito']=$_POST['credito'];
                          
                          if($_FILES['imagen']['error']>0)
                          {
                              $newcliente["imagen"]="../content/images/nofoto.jpg";
                          } 
                          else{
                              /*A qui se mueve la imagen de la pc al sitio*/
                              move_uploaded_file($_FILES['imagen']['tmp_name'],"../content/images/fotos/".$_FILES['imagen']['name']);
                              echo "<em id='__mceDel'></em>";
                              /*Se guardad en arreglo en su indice foto el nombre imagen  y su ruta en el sitio*/
                              $newcliente['imagen']="../content/images/fotos/".$_FILES['imagen']['name'];
                              
                          }
                         
                     $op=new cliente();
                     $op->addcliente($newcliente);
                     $datos=$op->viewcliente();
                          require'../views/cliente/viewscliente.php';
            break;
        
    }
}
else{
    if(!empty($_GET['vistacliente']))
    {
        switch ($_GET['accion'])
        {
            case'viewcliente':
                              $cliente=new cliente();
                              $datos=$cliente->viewcliente();
                              require'../views/cliente/viewscliente.php';
                             break;
                         
            case'eliminarcliente':
                  $cliente=new cliente();
                  $cer=$cliente->buscarcliente($_GET['id_cliente']);
                  if($cer['imagen']!="../content/images/fotos/noFoto.jpg");
                   {
                      unlink($cer['imagen']);
                  }
                  unset($cliente);
                  $cliente=new cliente();
                  $cliente->deletecliente($_GET['id_cliente']);
                  $datos=$cliente->viewcliente();
                  require'../views/cliente/viewscliente.php';
                             break;
            case 'editarcliente':
                          $cliente=new cliente();
                          $cliente=$cliente->buscarcliente($_GET['id_cliente']);
                          require ("../views/cliente/editarcliente.php");
                          break;
            case 'newcliente':
                              require'../views/cliente/newcliente.php';
                             break;
             case 'ventacliente':
                               require'../views/cliente.php';
                          break;
            
        }
    }
}

?>
