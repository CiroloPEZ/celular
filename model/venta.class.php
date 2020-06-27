<?php

require_once 'db.class.php';

class venta extends db
{
    public function addventa($newventa)
    {   
        $this->conectar();
        $query="insert into venta(id_celular, id_vendedor, fecha, total, id_cliente, num_venta, imagen) values ";
        $query.="('".$newventa['id_celular']."','".$newventa['id_vendedor']."','".$newventa['fecha']."','".$newventa['total']."','".$newventa['id_cliente']."','".$newventa['num_venta']."', '".$newventa['imagen']."')";    
        $registros=mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
                
    public function deleteventa($num_venta)
    {
        $this->conectar();
        $query="delete  from venta where num_venta='".$num_venta."'";
        $registros= mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
    public function updateventa($venta)
    {
        $this->conectar();
        $query="update venta set num_venta='".$venta['num_venta']."', id_modelo='".$venta['id_modelo']."', fecha='".$venta['fecha']."', total='".$venta['total']."', id_cliente='".$venta['id_cliente']."', num_venta='".$venta['num_venta']."', imagen='".$venta['imagen']."'";
        $query.="where num_venta='".$venta['num_venta']."'";
        $registros= mysql_query($query)or die (mysql_error());
        $this->desconectar();
        return true;
    }
    public function buscarventa($num_venta)
    {
        $this->conectar();
        $query="select*from venta where num_venta=".$num_venta;
        $registros= mysql_query($query)or die (mysql_error());
        if($registro=  mysql_fetch_array($registros))
          $datos=$registro;
        $this->desconectar();
        return $datos;
    }
    public function viewventa()
    {
        $this->conectar();
        $query="select*from venta ";
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
