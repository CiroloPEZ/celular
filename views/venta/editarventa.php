<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=reporte y-d-m.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body bgcolor="#79FF91">
        <div id="body">
            <div id="encabezado" >

   <table>
   <tr>
      <td><h1 style="float:left; color:#17027D; font-family:arial black">Reporte de la venta</h1></td>
   </tr>   
	   </table>
	 </div>
            <div id="opciones">
              <h3>Nota de venta</h3>
            </div>
            <div id="cuerpo">
                <br />
            <fieldset>
                 <form method="post" action="cliente.controller.php" enctype="multipart/form-data" onchange="archivo(event)">
               <label>Reporte venta</label>
                    <table>
                        <tr>
                            <td>id_celular:</td>
                            <td><input type="text" name="id_celular" value="<?php if(!empty($venta['id_celular'])){echo $venta['id_celular'];}?>" readonly="readonly" /></td>
                        </tr>
                        <tr>
                            <td>id_vendedor:</td>
                          <td><input type="text" name="id_vendedor" value="<?php if(!empty($venta['id_vendedor'])){echo $venta['id_vendedor'];}?>" /></td>
                        </tr>
                        <tr>
                            <td>fecha:</td>
                            <td><input type="text" name="fecha" value="<?php if(!empty($venta['fecha'])){echo $venta['fecha'];}?>" /></td>
                        </tr>
                        <tr>
                            <td>Hora:</td>
                            <td><input type="text" name="hora" value="<?php if(!empty($venta['hora'])){echo $venta['hora'];}?>"  /></td>
                        </tr>
                        <tr>
                            
                               <td>total:</td>
                            <td><input type="text" name="total" value="<?php if(!empty($venta['total'])){echo $venta['total'];}?>" /></td>
                        </tr>
                        <tr>
                            
                               <td>id_cliente:</td>
                            <td><input type="text" name="id_cliente" value="<?php if(!empty($venta['id_cliente'])){echo $venta['id_cliente'];}?>" /></td>
                        </tr>
                        <tr>
                            
                               <td>num_venta:</td>
                            <td><input type="text" name="num_venta" value="<?php if(!empty($venta['num_venta'])){echo $venta['num_venta'];}?>" /></td>
                        </tr>
                        <tr>
                            
                           <td><img id="previa" src="<?php echo $venta['imagen']; ?>" name="foto" width="90" height="90"/></td>
                        </tr>
                        
                    </table>
                   
                    <input type="hidden" name="id_celular" value="<?php if(!empty($venta['id_celular'])){echo $venta['id_celular'];}?>"/>
                    <input type="hidden" name="imagenanterior" value="<?php if(!empty($venta['imagen'])){echo $venta['imagen'];}?>"/>
                    <input type="hidden" name="viewventa" value="editarventa"/>
                   <input type="hidden" name="accion" value="editarventa"/>
                    <input type="submit" value="imprimir" id="form" />
                    
                 </form>
                     </fieldset>            
               <br />
            </div>
            <br/>
            <hr/>
            <hr/>
          </div>
    </body>
</html>