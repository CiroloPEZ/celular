<?php

require_once 'db.class.php';
class marca extends db
{
    public function addmarca($newmarca)
    {   
        $this->conectar();
        $query="insert into marca(id_marca, nom_marca) values ";
        $query.="('".$newmarca['id_marca']."','".$newmarca['nom_marca']."')";    
        $registros=mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
                
    public function deletemarca($id_marca)
    {
        $this->conectar();
        $query="delete  from marca  where id_marca='".$id_marca."'";
        $registros= mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
    public function updatemarca($marca)
    {
        $this->conectar();
        $query="update  set id_marca='".$marca['id_marca']."', nom_marca='".$marca['nom_marca']."'";
        $query.="where id_marca='".$marca['id_marca']."'";
        $registros= mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
    public function buscarmarca($marca)
    {
        $this->conectar();
        $query="select*from marca where  id_marca=".$marca;
        $registros=mysql_query($query)or die (mysql_error());
        if($registro=  mysql_fetch_array($registros))
          $datos=$registro;
        $this->desconectar();
        return $datos;
    }
    public function viewmarca()
    {
        $this->conectar();
        $query="select*from marca ";
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
   
