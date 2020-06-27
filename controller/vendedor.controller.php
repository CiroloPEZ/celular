<?php
require_once'../model/vendedor.class.php';
if(!empty($_POST['viewvendedor']))
{
    switch ($_POST['accion'])
    {
        case 'editarvendedor':
            $vendedor["id_vendedor"]=$_POST['id_vendedor'];
            $vendedor["nombre"]=$_POST['nombre'];
            $vendedor["apellido"]=$_POST['apellido'];
          
           /* $celular["imagen"]=$_POST['imagen'];*/
           if($_FILES['imagen']['error']>0)
            {
                $vendedor["imagen"]=$_POST['imagenanterior'];
                               
            }
            else{
                unlink($_POST['imagenanterior']);
                move_uploaded_file($_FILES['imagen']['tmp_name'],"../content/images/fotos/".$_FILES['imagen']['name']);
                echo "<em id='__mceDel'> </em>";
                $vendedor["imagen"]="../content/images/fotos/".$_FILES['imagen']['name'];
               }
           require_once ('../model/vendedor.class.php');
            $on=new vendedor();
            if($on->updatevendedor($vendedor)){
                $msg="los datos se actualizaron correctamente";
                require ("../views/vendedor/editarvendedor.php");
                
            }else{
                $msg="los datos no se actualizaron correctamente"; 
              require ("../views/vededor/editarvendedor.php");
                 
            }
            break;
            case 'addvendedor':
                          $newvendedor['id_vendedor']=$_POST['id_vendedor'];
                          $newvendedor['nombre']=$_POST['nombre'];
                          $newvendedor['apellido']=$_POST['apellido'];
                          
                          if($_FILES['imagen']['error']>0)
                          {
                              $newvendedor["imagen"]="../content/images/nofoto.jpg";
                          } 
                          else{
                              /*A qui se mueve la imagen de la pc al sitio*/
                              move_uploaded_file($_FILES['imagen']['tmp_name'],"../content/images/fotos/".$_FILES['imagen']['name']);
                              echo "<em id='__mceDel'></em>";
                              /*Se guardad en arreglo en su indice foto el nombre imagen  y su ruta en el sitio*/
                              $newvendedor['imagen']="../content/images/fotos/".$_FILES['imagen']['name'];
                              
                          }
                         
                     $op=new vendedor();
                     $op->addvendedor($newvendedor);
                     $datos=$op->viewvendedor();
                          require'../views/vendedor/viewsvendedor.php';
            break;
        
    }
}
else{
    if(!empty($_GET['vistavendedor']))
    {
        switch ($_GET['accion'])
        {
            case'viewvendedor':
                              $vendedor=new vendedor();
                              $datos=$vendedor->viewvendedor();
                              require'../views/vendedor/viewsvendedor.php';
                             break;
                         
            case'eliminarvendedor':
                  $vendedor=new vendedor();
                  $cer=$vendedor->buscarvendedor($_GET['id_vendedor']);
                  if($cer['imagen']!="../content/images/fotos/noFoto.jpg");
                   {
                      unlink($cer['imagen']);
                  }
                  unset($vendedor);
                  $vendedor=new vendedor();
                  $vendedor->deletevendedor($_GET['id_vendedor']);
                  $datos=$vendedor->viewvendedor();
                  require'../views/vendedor/viewsvendedor.php';
                             break;
            case 'editarvendedor':
                          $vendedor=new vendedor();
                          $vendedor=$vendedor->buscarvendedor($_GET['id_vendedor']);
                          require ("../views/vendedor/editarvendedor.php");
                          break;
            case 'newvendedor':
                              require'../views/vendedor/newvendedor.php';
                             break;
            
            
        }
    }
}

?>
