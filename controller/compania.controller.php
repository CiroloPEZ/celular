<?php
require_once'../model/compania.class.php';
if(!empty($_POST['viewcompania']))
{
    switch ($_POST['accion'])
    {
        case 'editarcompania':
            $compania["id_compania"]=$_POST['id_compania'];
            $compania["nombre"]=$_POST['nombre'];
            $compania["direccion"]=$_POST['direccion'];
            
           
           /* $celular["imagen"]=$_POST['imagen'];*/
           if($_FILES['imagen']['error']>0)
            {
                $compania["imagen"]=$_POST['imagenanterior'];
                               
            }
            else{
                unlink($_POST['imagenanterior']);
                move_uploaded_file($_FILES['imagen']['tmp_name'],"../content/images/fotos/".$_FILES['imagen']['name']);
                echo "<em id='__mceDel'> </em>";
                $celular["imagen"]="../content/images/fotos/".$_FILES['imagen']['name'];
               }
           require_once ('../model/compania.class.php');
            $on=new compania();
            if($on->updatecompania($compania)){
                $msg="los datos se actualizaron correctamente";
                require ("../views/compania/editarcompania.php");
                
            }else{
                $msg="los datos no se actualizaron correctamente"; 
              require ("../views/compania/editarcompania.php");
                 
            }
            break;
            case 'addcompania':
                          $newcompania['id_compania']=$_POST['id_compania'];
                          $newcompania['nombre']=$_POST['nombre'];
                          $newcompania['direccion']=$_POST['direccion'];
                         
                          if($_FILES['imagen']['error']>0)
                          {
                              $newcompania["imagen"]="../content/images/nofoto.jpg";
                          } 
                          else{
                              /*A qui se mueve la imagen de la pc al sitio*/
                              move_uploaded_file($_FILES['imagen']['tmp_name'],"../content/images/fotos/".$_FILES['imagen']['name']);
                              echo "<em id='__mceDel'></em>";
                              /*Se guardad en arreglo en su indice foto el nombre imagen  y su ruta en el sitio*/
                              $newcompania['imagen']="../content/images/fotos/".$_FILES['imagen']['name'];
                              
                          }
                         
                     $op=new compania();
                     $op->addcompania($newcompania);
                     $datos=$op->viewcompania();
                          require'../views/compania/viewscompania.php';
            break;
        
    }
}
else{
    if(!empty($_GET['vistacompania']))
    {
        switch ($_GET['accion'])
        {
            case'viewcompania':
                              $compania=new compania();
                              $datos=$compania->viewcompania();
                              require'../views/compania/viewscompania.php';
                             break;
                         
            case'eliminarcompania':
                  $compania=new compania();
                  $com=$compania->buscarcompania($_GET['id_compania']);
                  if($com['imagen']!="../content/images/fotos/noFoto.jpg");
                   {
                      unlink($com['imagen']);
                  }
                  unset($compania);
                  $compania=new compania();
                  $compania->deletecompania($_GET['id_compania']);
                  $datos=$compania->viewcompania();
                  require'../views/compania/viewscompania.php';
                             break;
            case 'editarcompania':
                          $compania=new compania();
                          $compania=$compania->buscarcompania($_GET['id_compania']);
                          require ("../views/compania/editarcompania.php");
                          break;
            case 'newcompania':
                              require'../views/compania/newcompania.php';
                             break;
             
                             
        }
    }
}

?>
