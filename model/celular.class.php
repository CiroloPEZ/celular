<?php

require_once 'db.class.php';
require_once 'compania.class.php';
class celular extends db
{
   public function viewcompania($id_compania){
       $this->conectar();
       $query="select*from compania where id_compania=".$id_compania;
        $registros= mysql_query($query)or die (mysql_error());
        $datos=array();
        while($registros=mysql_fetch_array($reg))
        {
            $datos[]=$registros;
        }
        $this->desconectar();
        return $datos;
   }
    
    public function addcelular($newcelular)
    {   
        $this->conectar();
        $query="insert into celular(id_celular, id_modelo, color, imei, id_compania, estatus, imagen) values ";
        $query.="('".$newcelular['id_celular']."','".$newcelular['id_modelo']."','".$newcelular['color']."','".$newcelular['imei']."','".$newcelular['id_compania']."','".$newcelular['estatus']."','".$newcelular['imagen']."')";    
        $registros=mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
                
    public function deletecelular($id_celular)
    {
        $this->conectar();
        $query="delete from celular where id_celular='".$id_celular."'"; 
        $registros= mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
    public function updatecelular($celular)
    {
        $this->conectar();
        $query="update celular set id_celular='".$celular['id_celular']."', modelo='".$celular['modelo']."', color='".$celular['color']."', imei='".$celular['imei']."', estatus='".$celular['estatus']."', compania='".$celular['compania']."', imagen='".$celular['imagen']."'";
        $query.="where id_celular='".$celular['id_celular']."'";
        $registros= mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
    public function buscarcelular($celular)
    {
        $this->conectar();
        $query="select*from celular where  id_celular=".$celular;
        $registros= mysql_query($query)or die (mysql_error());
        if($registro=  mysql_fetch_array($registros))
          $datos=$registro;
        $this->desconectar();
        return $datos;
    }
    public function viewcelular()
    {
        $this->conectar();
        $query="select*from celular ";
        $reg= mysql_query($query)or die (mysql_error());
        $datos=null;
        while($registros=mysql_fetch_array($reg))
        {
            $datos[]=$registros;
        }
        $this->desconectar();
        return $datos;
    }
public function viewxcompania($idcompania)
        {
        $this->conectar();
        $query="select*from celular where id_compania=".$idcompania;
        $reg= mysql_query($query)or die (mysql_error());
        $datos=null;
        while($registros=mysql_fetch_array($reg))
        {
            $datos[]=$registros;
        }
        $this->desconectar();
        return $datos;
        }
}

?>
   
