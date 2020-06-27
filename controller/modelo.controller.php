<?php
require_once'../model/modelo.class.php';
require_once '../model/marca.class.php';
if(!empty($_POST['viewmodelo']))
{
    switch ($_POST['accion'])
    {
        case 'editarmodelo':
            $modelo["id_modelo"]=$_POST['id_modelo'];
            $modelo["almacen"]=$_POST['almacen'];
            $modelo["nombre"]=$_POST['nombre'];
            $modelo["costo"]=$_POST['costo'];
          
           /* $celular["imagen"]=$_POST['imagen'];*/
           if($_FILES['imagen']['error']>0)
            {
                $modelo["imagen"]=$_POST['imagenanterior'];
                               
            }
            else{
                unlink($_POST['imagenanterior']);
                move_uploaded_file($_FILES['imagen']['tmp_name'],"../content/images/fotos/".$_FILES['imagen']['name']);
                echo "<em id='__mceDel'> </em>";
                $modelo["imagen"]="../content/images/fotos/".$_FILES['imagen']['name'];
               }
           require_once ('../model/modelo.class.php');
            $on=new modelo();
            if($on->updatemodelo($modelo)){
                $msg="los datos se actualizaron correctamente";
                require ("../views/modelo/editarmodelo.php");
                
            }else{
                $msg="los datos no se actualizaron correctamente"; 
              require ("../views/modelo/editarmodelo.php");
                 
            }
            break;
            case 'addmodelo':
                          $newmodelo['id_modelo']=$_POST['id_modelo'];
                          $newmodelo['id_marca']=$_POST['id_marca'];
                          $newmodelo['nombre']=$_POST['nombre'];
                          $newmodelo['costo']=$_POST['costo'];
                      
                          if($_FILES['imagen']['error']>0)
                          {
                              $newmodelo["imagen"]="../content/images/nofoto.jpg";
                          } 
                          else{
                              /*A qui se mueve la imagen de la pc al sitio*/
                              move_uploaded_file($_FILES['imagen']['tmp_name'],"../content/images/fotos/".$_FILES['imagen']['name']);
                              echo "<em id='__mceDel'></em>";
                              /*Se guardad en arreglo en su indice foto el nombre imagen  y su ruta en el sitio*/
                              $newmodelo['imagen']="../content/images/fotos/".$_FILES['imagen']['name'];
                              
                          }
                         
                     $op=new modelo();
                     $op->addmodelo($newmodelo);
                     $datos=$op->viewmodelo();
                          require '../views/modelo/viewsmodelo.php';
            break;
        
    }
}
else{
    if(!empty($_GET['vistamodelo']))
    {
        switch ($_GET['accion'])
        {
            case'viewmodelo':
                              $modelo=new modelo();
                              $datos=$modelo->viewmodelo();
                              require'../views/modelo/viewsmodelo.php';
                             break;
                         
            case'eliminarmodelo':
                  $modelo=new modelo();
                  $mod=$modelo->buscarmodelo($_GET['id_modelo']);
                  if($mod['imagen']!="../content/images/fotos/noFoto.jpg");
                   {
                      unlink($mod['imagen']);
                  }
                  unset($modelo);
                  $modelo=new modelo();
                  $modelo->deletemodelo($_GET['id_modelo']);
                  $datos=$modelo->viewmodelo();
                  require'../views/modelo/viewsmodelo.php';
                             break;
            case 'editarmodelo':
                          $rmodelo=new modelo();
                          $modelo=$rmodelo->buscarmodelo($_GET['id_modelo']);
                          require ("../views/modelo/editarmodelo.php");
                          break;
            case 'newmodelo':
                              $model=new marca();
                              $mode=$model->viewmarca(); 
                              require'../views/modelo/newmodelo.php';
                             break;
             case 'ventamodelo':
                               require'../views/venta.php';
                          break;
            
        }
    }
}

?>