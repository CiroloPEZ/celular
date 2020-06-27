<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/estilos.css" />
        <script type="text/javascript" src="../js/utilerias.js"></script>
    </head>
    <body bgcolor="#79FF91">
        <div id="body">
            <div id="encabezado" >

   <table>
   <tr>
  	   <td><img style="float:left;" src="../content/iconos_eq_s4.png" width="100" height="100" alt="" border="3"></td>
  	   <td><h1 style="float:left; color:#17027D; font-family:arial black">Editar datos del TELEFONO</h1></td>
           <td><img style="float:left;" src="../content/logo_4glte.png" width="50" height="50" alt="" border="3"></td>
	</tr>   
	   </table>
	 </div>
            <div id="opciones">
              <h3>Editando</h3>
            </div>
            <div id="cuerpo">
                <br />
            <fieldset>
                 <form method="post" action="cliente.controller.php" enctype="multipart/form-data" onchange="archivo(event)">
               <label>Editar Datos del cliente</label>
                    <table>
                        <tr>
                            <td>id_cliente:</td>
                            <td><input type="text" name="" value="<?php if(!empty($cliente['id_ciente'])){echo $cliente['id_cliente'];}?>" readonly="readonly" /></td>
                        </tr>
                        <tr>
                            <td>nom_cliente:</td>
                          <td><input type="text" name="modelo" value="<?php if(!empty($cliente['nom_cliente'])){echo $cliente['nom_cliente'];}?>" /></td>
                        </tr>
                        <tr>
                            <td>credito:</td>
                            <td><input type="text" name="color" value="<?php if(!empty($cliente['credito'])){echo $cliente['credito'];}?>" /></td>
                        </tr>
                        <tr>
                            <td>imagen:</td>
                            <td><input type="file" name="imagen"/></td>
                           <td><img id="previa" src="<?php echo $celular['imagen']; ?>" name="foto" width="90" height="90"/></td>
                        </tr>
                        
                    </table>
                   
                    <input type="hidden" name="id_cliente" value="<?php if(!empty($cliente['id_cliente'])){echo $cliente['id_cliente'];}?>"/>
                    <input type="hidden" name="imagenanterior" value="<?php if(!empty($cliente['imagen'])){echo $cliente['imagen'];}?>"/>
                    <input type="hidden" name="viewcliente" value="editarcliente"/>
                   <input type="hidden" name="accion" value="editarcliente"/>
                    <input type="submit" value="Guardar" id="form" />
                    
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