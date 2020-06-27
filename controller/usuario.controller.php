<?php
require_once'../model/usuario.class.php';
if(!empty($_POST['viewcelular']))
{
    switch ($_POST['accion'])
    {
        case 'editarcelular':
            $celular["id_celular"]=$_POST['id_celular'];
            $celular["modelo"]=$_POST['modelo'];
            $celular["color"]=$_POST['color'];
            $celular["imei"]=$_POST['imei'];
            $celular["estatus"]=$_POST['estatus'];
            $celular["compania"]=$_POST['compania'];
            if($_FILES['imagen']['error']>0)
            {
                $celular["imagen"]=$_POST['imagenanterior'];
                               
            }
            else{
                unlink($_POST['imagenanterior']);
                move_uploaded_file($_FILES['imagen']['tmp_name'],"../content/images/fotos/".$_FILES['imagen']['name']);
                echo "<em id='__mceDel'> </em>";
                $celular["imagen"]="../content/images/fotos/".$_FILES['imagen']['name'];
               }
           require_once ('../model/celular.class.php');
            $on=new celular();
            if($on->updatecelular($celular)){
                $msg="los datos se actualizaron correctamente";
                require ("../views/editarcelular.php");
                
            }else{
                $msg="los datos no se actualizaron correctamente"; 
              require ("../views/editarcelular.php");
                 
            }
            break;
            case 'addcelular':
                          $newcelular['id_celular']=$_POST['id_celular'];
                          $newcelular['modelo']=$_POST['modelo'];
                          $newcelular['color']=$_POST['color'];
                          $newcelular['imei']=$_POST['imei'];
                          $newcelular['estatus']=$_POST['estatus'];
                          $newcelular['compania']=$_POST['compania'];
                          if($_FILES['imagen']['error']>0)
                          {
                              $newcelular["imagen"]="../content/images/nofoto.jpg";
                          } 
                          else{
                              /*A qui se mueve la imagen de la pc al sitio*/
                              move_uploaded_file($_FILES['imagen']['tmp_name'],"../content/images/fotos/".$_FILES['imagen']['name']);
                              echo "<em id='__mceDel'></em>";
                              /*Se guardad en arreglo en su indice foto el nombre imagen  y su ruta en el sitio*/
                              $newcelular['imagen']="../content/images/fotos/".$_FILES['imagen']['name'];
                              
                          }
                         
                     $op=new celular();
                     $op->addcelular($newcelular);
                     $datos=$op->viewcelular();
                          require'../views/viewscelular.php';
            break;
        
    }
}
else{
    if(!empty($_GET['vistausuario']))
    {
        switch ($_GET['accion'])
        {
           case 'login':
                      
                       require'../views/usuario/login.php';
                             break;
                         
            case'eliminarusuario':
                  $celular=new celular();
                  $cer=$celular->buscarcelular($_GET['id_celular']);
                  if($cer['imagen']!="../content/images/fotos/noFoto.jpg");
                   {
                      unlink($cer['imagen']);
                  }
                  unset($celular);
                  $celular=new celular();
                  $celular->deletecelular($_GET['id_celular']);
                  $datos=$celular->viewcelular();
                  require'../views/celular/viewscelular.php';
                             break;
            case 'editarusuario':
                          $celular=new celular();
                          $celular=$celular->buscarcelular($_GET['id_celular']);
                          require ("../views/celular/editarcelular.php");
                          break;
            case 'registrar':
                      require'../views/usuario/registra.php';
                 break;
            
          /*  case 'compania':
                      $compania= new compania();
                      $datos=$compania->compania();
                      echo $datos;
                      //require '../views/newcelular.php';
                      break;*/
         
        }
    }
}

?>
