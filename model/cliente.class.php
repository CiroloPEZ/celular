<?php

require_once 'db.class.php';
class cliente extends db
{
    public function addcliente($newcliente)
    {   
        $this->conectar();
        $query="insert into cliente(id_cliente, nom_cliente, credito, imagen) values ";
        $query.="('".$newcliente['id_cliente']."','".$newcliente['nom_cliente']."','".$newcliente['credito']."','".$newcliente['imagen']."')";    
        $registros=mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
                
    public function deletecliente($id_cliente)
    {
        $this->conectar();
        $query="delete  from cliente where id_cliente='".$id_cliente."'";
        $registros= mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
    public function updatecliente($cliente)
    {
        $this->conectar();
        $query="update cliente set id_cliente='".$cliente['id_cliente']."', nom_cliente='".$cliente['nom_cliente']."', credito='".$cliente['credito']."', imagen='".$cliente['imagen']."'";
        $query.="where id_cliente='".$cliente['id_cliente']."'";
        $registros= mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
    public function buscarcliente($cliente)
    {
        $this->conectar();
        $query="select*from cliente where  id_cliente=".$cliente;
        $registros= mysql_query($query)or die (mysql_error());
        if($registro=  mysql_fetch_array($registros))
          $datos=$registro;
        $this->desconectar();
        return $datos;
    }
    public function viewcliente()
    {
        $this->conectar();
        $query="select*from cliente ";
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
