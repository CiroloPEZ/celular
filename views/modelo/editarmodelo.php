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
  	   <td><h1 style="float:left; color:#17027D; font-family:arial black">Datos generales del telefono</h1></td>
           <td><img style="float:left;" src="../content/logo_4glte.png" width="50" height="50" alt="" border="3"></td>
	</tr>   
	   </table>
	 </div>
            <div id="opciones">
              <h3>Datos</h3>
            </div>
            <div id="cuerpo">
                <br />
            <fieldset>
                 <form method="post" action="modelo.controller.php" enctype="multipart/form-data" onchange="archivo(event)">
               <label>Datos</label>
                    <table>
                        <tr>
                            <td>id_modelo:</td>
                            <td><input type="text" name="id_modelo" value="<?php if(!empty($modelo['id_modelo'])){echo $modelo['id_modelo'];}?>" readonly="readonly" /></td>
                        </tr>
                        <tr>
                            <td>Marca:</td>
                          <td><input type="text" name="id_marca" value="<?php if(!empty($modelo['id_marca'])){echo $modelo['id_marca'];}?>" /></td>
                        </tr>
                        <tr>
                            <td>nombre:</td>
                            <td><input type="text" name="nombre" value="<?php if(!empty($modelo['nombre'])){echo $modelo['nombre'];}?>" /></td>
                        </tr>
                        <tr>
                            <td>costo:</td>
                            <td><input type="text" name="costo" value="<?php if(!empty($modelo['costo'])){echo $modelo['costo'];}?>" /></td>
                        </tr>
                        <td>imagen:</td>
                            <td><input type="file" name="imagen"/></td>
                           <td><img id="previa" src="<?php echo $modelo['imagen']; ?>" name="foto" width="90" height="90"/></td>
                        </tr>
                        
                    </table>
                   
                    <input type="hidden" name="id_modelo" value="<?php if(!empty($modelo['id_modelo'])){echo $modelo['id_modelo'];}?>"/>
                    <input type="hidden" name="imagenanterior" value="<?php if(!empty($modelo['imagen'])){echo $modelo['imagen'];}?>"/>
                    <input type="hidden" name="viewmodelo" value="editarmodelo"/>
                   <input type="hidden" name="accion" value="editarmodelo"/>
                    <input type="submit" value="Guardar" id="form" />
                    
                 </form>
                     </fieldset>            
               <br />
            </div>
            <br/>
            <hr/>
            <hr/>
            
            <h1><?php if(!empty($msg))echo $msg;?></h1>
        </div>
    </body>
</html>