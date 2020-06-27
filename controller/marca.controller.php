<?php
require_once'../model/marca.class.php';
if(!empty($_POST['viewmarca']))
{
    switch ($_POST['accion'])
    {
        case 'editarmarca':
            $marca["id_marca"]=$_POST['id_marca'];
            $marca["nom_marca"]=$_POST['nom_marca'];
            
            if($on->updatemarca($marca)){
                $msg="los datos se actualizaron correctamente";
                require ("../views/marca/editarmarca.php");
                
            }else{
                $msg="los datos no se actualizaron correctamente"; 
              require ("../views/marca/editarmarca.php");
                 
            }
            break;
            case 'addmarca':
                          $newmarca['id_marca']=$_POST['id_marca'];
                          $newmarca['nom_marca']=$_POST['nom_marca'];                             
                           
                         $op=new marca();
                          $op->addmarca($newmarca);
                          $datos=$op->viewmarca(); 
                          require'../views/marca/viewsmarca.php';
            break;
    }
}
else{
    if(!empty($_GET['vistamarca']))
    {
        switch ($_GET['accion'])
        {
            case'viewmarca':
                              $marca=new marca();
                              $datos=$marca->viewmarca();
                              require'../views/marca/viewsmarca.php';
                             break;
                         
            case'eliminarmarca':
                  $marca=new marca();
                  $cer=$marca->buscarmarca($_GET['id_marca']);
                  require'../views/marca/viewsmarca.php';
                             break;
            case 'editarmarca':
                          $marca=new marca();
                          $marca=$marca->buscarmarca($_GET['id_marca']);
                          require ("../views/marca/editarmarca.php");
                          break;
            case 'newmarca':
                              require'../views/marca/newmarca.php';
                             break;
          
            
        }
    }
}

?>
