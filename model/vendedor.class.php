<?php

require_once 'db.class.php';
class vendedor extends db
{
    public function addvendedor($newvendedor)
    {   
        $this->conectar();
        $query="insert into vendedor(id_vendedor, nombre, apellido, imagen) values ";
        $query.="('".$newvendedor['id_vendedor']."','".$newvendedor['nombre']."','".$newvendedor['apellido']."', '".$newvendedor['imagen']."')";    
        $registros=mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
                
    public function deletevendedor($id_vendedor)
    {
        $this->conectar();
        $query="delete from vendedor where id_vendedor='".$id_vendedor."'";
        $registros= mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
    public function updatevendedor($vendedor)
    {
        $this->conectar();
        $query="update vendedor set id_vendedor='".$vendedor['id_vendedor']."', nombre='".$vendedor['nombre']."', apellido='".$vendedor['apellido']."', imagen='".$vendedor['imagen']."'";
        $query.="where id_vendedor='".$vendedor['id_vendedor']."'";
        $registros= mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
    public function buscarvendedor($vendedor)
    {
        $this->conectar();
        $query="select*from vendedor where  id_vendedor=".$vendedor;
        $registros= mysql_query($query)or die (mysql_error());
        if($registro=  mysql_fetch_array($registros))
          $datos=$registro;
        $this->desconectar();
        return $datos;
    }
    public function viewvendedor()
    {
        $this->conectar();
        $query="select*from vendedor";
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