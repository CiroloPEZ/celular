<?php

require_once 'db.class.php';
class compania extends db
{
    public function addcompania($newcompania)
    {   
        $this->conectar();
        $query="insert into compania(id_compania, nombre, direccion, imagen) values ";
        $query.="('".$newcompania['id_compania']."','".$newcompania['nombre']."','".$newcompania['direccion']."','".$newcompania['imagen']."')";    
        $registros=mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
                
    public function deletecompania($id_compania)
    {
        $this->conectar();
        $query="delete  from compania where id_compania='".$id_compania."'";
        $registros= mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
    public function updatecompania($compania)
    {
        $this->conectar();
        $query="update compania set id_compania='".$compania['id_compania']."', nombre='".$compania['nombre']."', direccion='".$compania['direccion']."', imagen='".$compania['imagen']."'";
        $query.="where id_compania='".$compania['id_compania']."'";
        $registros= mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
    public function buscarcompania($id_compania)
    {
        $this->conectar();
        $query="select*from compania where  id_compania=".$id_compania;
        $registros= mysql_query($query)or die (mysql_error());
     while($registro=  mysql_fetch_array($registros))
     {  $datos=$registro;}
        $this->desconectar();
        return $datos;
    }
    public function viewcompania()
    {
        $this->conectar();
        $query="select*from compania ";
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
