<?php
require_once'../model/celular.class.php';
require_once'../model/compania.class.php';
require_once'../model/modelo.class.php';
if(!empty($_POST['viewcelular']))
{
    switch ($_POST['accion'])
    {
        case 'editarcelular':
            $celular["id_celular"]=$_POST['id_celular'];
            $celular["id_modelo"]=$_POST['id_modelo'];
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
                          $newcelular['id_modelo']=$_POST['id_modelo'];
                          $newcelular['color']=$_POST['color'];
                          $newcelular['imei']=$_POST['imei'];
                          $newcelular['estatus']=$_POST['estatus'];
                          $newcelular['id_compania']=$_POST['id_compania'];
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
                     $com=new compania();
                     $compa=$com->buscarcompania($_POST['id_compania']); 
                     $mod=new modelo();
                     $mode=$mod->buscarmodelo($_POST['id_modelo']);
                     require '../views/celular/viewscelular.php';
            break;
        
    }
}
else{
    if(!empty($_GET['vistacelular']))
    {
        switch ($_GET['accion'])
        {
            case'viewcelular':
                             
                              $com=new compania();
                              $compa=$com->buscarcompania($_GET['id_compania']);
                              $cel=new celular();
                              $datos=$cel->viewxcompania($_GET['id_compania']);
                              
                              require'../views/celular/viewscelular.php';
                             break;
                         
            case'eliminarcelular':
                  $celular=new celular();
                  $cer=$celular->buscarcelular($_GET['id_celular']);
                  if($cer['imagen']!="../content/images/fotos/noFoto.jpg");
                   {
                      unlink($cer['imagen']);
                  }
                  unset($celular);
                  $celular=new celular();
                  $celular->deletecelular($_GET['id_celular']);
                  /* $datos=$celular->viewcelular(); */
                  $com=new compania();
                  $compa=$com->buscarcompania($_GET['idcompania']);
                  
                  require'../views/celular/viewscelular.php';
                             break;
            case 'editarcelular':
                          $celular=new celular();
                          $celular=$celular->buscarcelular($_GET['id_celular']);
                          require ("../views/celular/editarcelular.php");
                          break;
            case 'newcelular':
                     $com=new compania();
                     $compa=$com->buscarcompania($_GET['id_compania']);    
                     $mod=new modelo();
                     $mode=$mod->buscarmodelo($_GET['id_compania']); 
                       require'../views/celular/newcelular.php';
                             break;      
        }
    }
}

?>
