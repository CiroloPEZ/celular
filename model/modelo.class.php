<?php

require_once 'db.class.php';
class modelo extends db
{
    public function addmodelo($newmodelo)
    {   
        $this->conectar();
        $query="insert into modelo(id_modelo, id_marca, nombre, costo, imagen) values ";
        $query.="('".$newmodelo['id_modelo']."','".$newmodelo['id_marca']."','".$newmodelo['nombre']."','".$newmodelo['costo']."','".$newmodelo['imagen']."')";    
        $registros=mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
                
    public function deletemodelo($id_modelo)
    {
        $this->conectar();
        $query="delete from modelo where id_modelo='".$id_modelo."'";
        $registros= mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
    public function updatemodelo($modelo)
    {
        $this->conectar();
        $query="update modelo set id_modelo='".$modelo['id_modelo']."', id_marca='".$modelo['id_marca']."', nombre='".$modelo['nombre']."', costo='".$modelo['costo']."', imagen='".$modelo['imagen']."'";
        $query.="where id_modelo='".$modelo['id_modelo']."'";
        $registros= mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
    public function buscarmodelo($id_modelo)
    {
        $this->conectar();
        $query="select *from modelo where  id_modelo=".$id_modelo;
        $registros= mysql_query($query)or die (mysql_error());
        $datos=array();
        if($registro=  mysql_fetch_array($registros))
          $datos=$registro;
        $this->desconectar();
        return $datos;
    }
    public function viewmodelo()
    {
        $this->conectar();
        $query="select*from modelo";
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
